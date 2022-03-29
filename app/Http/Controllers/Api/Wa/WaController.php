<?php

namespace App\Http\Controllers\Api\Wa;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;

use App\Models\Master\MasterConfig;
use App\Models\It\ItLogError;
use App\User;

class WaController extends Controller
{

  public function index($type){

    $configname = "master_config.wa.".$type;
    $findWaconfig = MasterConfig::where('master_config_name', $configname)->first();
    $getJson = json_decode($findWaconfig->master_config_json);
    $host    = $getJson->host; // $findWaconfig->
    $port    = $getJson->port;
    $timeout = $getJson->timeout;

    $fp = @fsockopen($host, $port, $errno, $errstr, $timeout);
    if (!$fp) {
     return response()->json([
      'error'  =>  false,
      'msg'    => 'Server Down!!',
      'errno'  =>  $errno,
      'errstr' =>  $errstr,
    ]);
   }

   $tokens = $getJson->token;

    // Get Barcode
   $response = Http::withToken($tokens)->post('http://'.$host.':'.$port.'/api/v1/whatsapp/login',[
    'output' => 'json',
    'timeout' => $timeout,
  ]);

   $response_decode = json_decode($response);

   if (property_exists($response_decode,'data')) {

    $getQrcode = json_decode($response);
    $img = $getQrcode->data->qrcode;
    return response()->json([
      'error'     =>  false,
      'img' => $img,
      'messages'  =>  "Belum Login"
    ]);

  }else {
    return response()->json([
      'error'     =>  false,
      'img' => 'Empty',
      'messages'  =>  "Sudah Login"
    ]);
  }

}   

public function saveConfigWa($type=null)
{
  $validator = Validator::make(request()->all(), [
    'config_host' => 'required',
    'config_port' => 'required',
    'config_timeout' => 'required',
    'config_phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10'
  ]);

  if ($validator->fails()) {
    $msg = $validator->errors();
    return response()->json(['error' => true, 'messages' => $msg]);
  }


  if ($type==null) {
    return response()->json([
      'error'     =>  true,
      'messages'  =>  "Tipe Harus Diisi"
    ]);
  }

  $fp = @fsockopen(request('config_host'), request('config_port'), $errno, $errstr, request('config_timeout'));
  if (!$fp) {
   return response()->json([
    'error'  =>  true,
    'messages'    => 'Server Down!!',
    'errno'  =>  $errno,
    'errstr' =>  $errstr,
  ]);
 }

 $configname = "master_config.wa.".$type;
 $count = MasterConfig::where('master_config_name', $configname);
 $findWaconfig = MasterConfig::where('master_config_name', $configname)->first();

    // Get JWT
 $response = Http::withBasicAuth('aldo_k', '83e4060e-78e1-4fe5-9977-aeeccd46a2b8')->get( 'http://'.request('config_host').':'.request('config_port') . '/api/v1/whatsapp/auth' );



 $data_token = json_decode($response->body());
 $json = [
  'host' => request('config_host'),
  'port' => request('config_port'),
  'timeout' => request('config_timeout'),
  'phone' => request('config_phone'),
  'status' => 'Active',
  'token' => $data_token->data->token
];

if ($count->count() == 1) {
  $findWaconfig->master_config_name = $configname;
  $findWaconfig->master_config_status = "Active";
  $findWaconfig->master_config_json = json_encode($json);
  $findWaconfig->save();
} else {
  $data['master_config_name'] = $configname;
  $data['master_config_status'] = "Active";
  $data['master_config_json'] = json_encode($json);
  $MasterConfig = MasterConfig::create($data);
}

return response()->json([
  'error'     =>  false,
  'trigger'   =>  "master_config_id",
  'messages'  =>  "Berhasil Ditambahkan"
]);
}

public function send($type)
{ 
      //Get Token master_config
  $configname = "master_config.wa.".$type;
  $findtokenwa = MasterConfig::where('master_config_name', $configname)->first();

  $data_token_json = $findtokenwa->master_config_json;

  $data_decode_config = json_decode($data_token_json);
  $host = $data_decode_config->host;
  $port = $data_decode_config->port;
  $timeout = $data_decode_config->timeout;

  $fp = @fsockopen($host, $port, $errno, $errstr, $timeout);
  if (!$fp) {
   return response()->json([
    'error'  =>  false,
    'msg'    => 'Server Down!!',
    'errno'  =>  $errno,
    'errstr' =>  $errstr,
  ]);
 }

 $validator = Validator::make(request()->all(), [
  'msg' => 'json',
  'phone' => 'json', 
]);

 if ($validator->fails()) {
  $message = $validator->errors();
  return response()->json(['error' => true, 'messages' => $message]);
}

        //Jika Request Phone
if (request('phone')) {
  $msgs = json_decode(request('msg'));
  $dataPhone = json_decode(request('phone'));

  if (substr($dataPhone,0,1)==0) {
    $phone = "62".substr($dataPhone,1);
  }else {
    $phone = $dataPhone;
  }

        //Body Messages 
  $content= $msgs;
  $sentMsg = $content;

  $response = Http::withHeaders([
    'Content-Type' => 'application/x-www-form-urlencoded',
    'Authorization' => "Bearer $data_decode_config->token",
  ])->post("http://".$data_decode_config->host.":".$data_decode_config->port."/api/v1/whatsapp/send/text?msisdn=".$phone."&message=$sentMsg&quotedid=&quotedmsg=");
  return response()->json(['data' => $response->json()]);
}else {
  $msgs = json_decode(request('msg'));

          //Body Messages 
  $content=$msgs;
  $sentMsg = $content;

  $response = Http::withHeaders([
    'Content-Type' => 'application/x-www-form-urlencoded',
    'Authorization' => "Bearer $data_decode_config->token",
  ])->post("http://".$data_decode_config->host.":".$data_decode_config->port."/api/v1/whatsapp/send/text?msisdn=".$data_decode_config->phone."&message=$sentMsg&quotedid=&quotedmsg=");
  return response()->json(['data' => $response->json()]);
}

}

public function sendLocal($type,$data)
{ 
      //Get Token master_config
  $configname = "master_config.wa.".$type;
  $findtokenwa = MasterConfig::where('master_config_name', $configname)->first();

  $data_token_json = $findtokenwa->master_config_json;

  $data_decode_config = json_decode($data_token_json);
  $host = $data_decode_config->host;
  $port = $data_decode_config->port;
  $timeout = $data_decode_config->timeout;

  $fp = @fsockopen($host, $port, $errno, $errstr, $timeout);
  if (!$fp) {
   return response()->json([
    'error'  =>  false,
    'msg'    => 'Server Down!!',
    'errno'  =>  $errno,
    'errstr' =>  $errstr,
  ]);
 }
 $dataDecode = json_decode($data);

 if ($findtokenwa->count() > 0 && $dataDecode->phone==null) {
  return response()->json(['msg' => "Tidak Terkirim Karena Config Dan Nomor Hp Tidak ditemukan"]);
}

        //Jika Request Phone
if ($dataDecode->phone) {
  $msgs = $dataDecode->msg;
  $dataPhone = $dataDecode->phone;

  if (substr($dataPhone,0,1)==0) {
    $phone = "62".substr($dataPhone,1);
  }else {
    $phone = $dataPhone;
  }

  //Body Messages 
  $content= $msgs;
  $sentMsg = $content;

  $response = Http::withHeaders([
    'Content-Type' => 'application/x-www-form-urlencoded',
    'Authorization' => "Bearer $data_decode_config->token",
  ])->post("http://".$data_decode_config->host.":".$data_decode_config->port."/api/v1/whatsapp/send/text?msisdn=".$phone."&message=$sentMsg&quotedid=&quotedmsg=");
  return response()->json(['data' => $response->json()]);
}else {
  $msgs = $dataDecode->msg;

  //Body Messages 
  $content=$msgs;
  $sentMsg = $content;

  $response = Http::withHeaders([
    'Content-Type' => 'application/x-www-form-urlencoded',
    'Authorization' => "Bearer $data_decode_config->token",
  ])->post("http://".$data_decode_config->host.":".$data_decode_config->port."/api/v1/whatsapp/send/text?msisdn=".$data_decode_config->phone."&message=$sentMsg&quotedid=&quotedmsg=");
  return response()->json(['data' => $response->json()]);
}

}

function sendError()
{   
  //Get Token master_config
  $findtokenwa = MasterConfig::where('master_config_name', 'master_config.wa.it')->first();

  $data_config = $findtokenwa->master_config_json;

  $config = json_decode($data_config);

  $validator = Validator::make(request()->all(), [
    'msg' => 'json',
    'form' => 'json',
    'url' => 'json',
  ]) ;

  if ($validator->fails()) {
    $message = $validator->errors();
    return response()->json(['error' => true, 'messages' => $message]);
  }

  $user_id = auth()->user()->id;
  $msgs['json'] = json_decode(request('msg'));
  $msgs['referer'] = request()->headers->get('referer');
  $formData = json_decode(request('form'));
  $url = json_decode(request('url'));
  
foreach ($formData as $elementkey => $element) {
  foreach($element as $valueKey => $value) {
        
            unset($formData[0]);
    }
}
  // $formData = ['1' => $form[1],
  // '2' => $form[2], ];

  //Split
  $str = $msgs['json']->file;

  $file = $str;

  //cek data yang sama
  $findItLogError = ItLogError::where('it_log_error_json', request('msg'));
  $ItLogError = $findItLogError->get();
  if ($findItLogError->count() >= 1) {
    foreach ($ItLogError as $key => $ItLogError) {
      $ItLogError->users_id = $user_id;
      $ItLogError->it_log_error_form = urlencode(json_encode($formData));
      $ItLogError->it_log_error_url = json_encode($url);
      $ItLogError->it_log_error_message = json_encode($msgs['json']->message);
      $ItLogError->it_log_error_exception = json_encode($msgs['json']->exception);
      $ItLogError->it_log_error_file = json_encode($msgs['json']->file);
      $ItLogError->it_log_error_line = json_encode($msgs['json']->line);
      $ItLogError->it_log_error_trace = json_encode($msgs['json']->trace);
      $ItLogError->it_log_error_json = json_encode($msgs);
      $ItLogError->save();
    }
  }else {
    $data['users_id'] = $user_id;
    $data['it_log_error_form'] = urlencode(json_encode($formData));
    $data['it_log_error_url'] = json_encode($url);
    $data['it_log_error_message'] = json_encode($msgs['json']->message);
    $data['it_log_error_exception'] = json_encode($msgs['json']->exception);
    $data['it_log_error_file'] = json_encode($msgs['json']->file);
    $data['it_log_error_line'] = json_encode($msgs['json']->line);
    $data['it_log_error_trace'] = json_encode($msgs['json']->trace);
    $data['it_log_error_json'] = json_encode($msgs);
    $data['it_log_error_status'] = "Not Fixed";
    $ItLogError = ItLogError::create($data);
  }

  //Find User
  $findusername = User::select('name as username')->where('id', $user_id)->first();

  $username = $findusername->username;

  $pattern = array('\\\\', '\\' );
  $replacement = '\\';
  
  //Body Messages 
  $content="Exception :".json_encode($msgs['json']->exception).",%0AUser Input :".$username.",%0AFile Error :".$file.",%0ALine :".json_encode($msgs['json']->line).",%0AError :".json_encode($msgs['json']->message).",%0AURL :".$url.",%0AReferer :".$msgs['referer'].",%0AForm Data :".urlencode(json_encode($formData));
  $sentMsg = str_replace($pattern, $replacement, $content);

  $response = Http::withHeaders([
    'Content-Type' => 'application/x-www-form-urlencoded',
    'Authorization' => "Bearer $config->token",
  ])->post("http://".$config->host.":".$config->port."/api/v1/whatsapp/send/text?msisdn=".$config->phone."&message=$sentMsg&quotedid=&quotedmsg=");
  return response()->json(['data' => $response->json()]);

}   

public function find($type)
{
  $type_config = "master_config.wa.".$type;
  $data = MasterConfig::where('master_config_name', $type_config)->first();

  return response()->json(['error' => false, 'messages'=>$data]);
}

function findTimeSalam()
{
  //get Hours and minutes
  $hour = date('H:i');

  //set salam using IF
  if ($hour > '05:30' && $hour < '10:00') {
    $salam = 'Selamat Pagi';
  } elseif ($hour >= '10:00' && $hour < '15:00') {
    $salam = 'Selamat Siang';
  } elseif ($hour < '18:00') {
    $salam = 'Selamat Sore';
  } else {
    $salam = 'Selamat Malam';
  }

  return $salam;
}


}
