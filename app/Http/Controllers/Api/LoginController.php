<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\User;
use Carbon\Carbon;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Laravel\Passport\Client as OClient; 

class LoginController extends Controller
{
  public function login(){
    $validator = Validator::make(request()->all(), [
      'email'    => 'required|string|email',
      'password' => 'required|string',
    ]);

    if ($validator->fails()) {
      $message = $validator->errors();
      return response()->json(['error' => true, 'messages' => $message]);
    }

    $credentials = request(['email', 'password']);


    if(!Auth::attempt($credentials))
      return response()->json([
        'error'   => true, 
        'message' => 'Unauthorized'
      ], 401);

    $oClient = OClient::where('password_client', 1)->first();

    $response = Http::post(env('APP_URL') . '/oauth/token', [
      'grant_type'    => 'password',
      'client_id'     => $oClient->id,
      'client_secret' => $oClient->secret,
      'username'      => request('email'),
      'password'      => request('password'),
      'scope'         => '*',
    ]);

    $result = json_decode((string) $response->getBody(), true);

    return response()->json(['error' => false, 'messages' => $result]);
  }

  public function refresh(){
    $validator = Validator::make(request()->all(), [
      'refresh_token' => 'required|string',
    ]);

    if ($validator->fails()) {
      $message = $validator->errors();
      return response()->json(['error' => true, 'messages' => $message]);
    }

    $oClient = OClient::where('password_client', 1)->first();

    $response = Http::post(env('APP_URL') . '/oauth/token', [
      'grant_type'    => 'refresh_token',
      'client_id'     => $oClient->id,
      'client_secret' => $oClient->secret,
      'refresh_token' => request('refresh_token'),
      'scope'         => '*',
    ]);

    $result = json_decode((string) $response->getBody(), true);

    $error  = true;
    if ($response->status()!=401) {
      $error  = false;
    }    

    return response()->json(['error' => $error, 'messages' => $result]);
  }

  public function details()
  {
    $user = Auth::user();
    return response()->json(['success' => $user]);
  }

}
