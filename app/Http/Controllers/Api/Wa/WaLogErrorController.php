<?php

namespace App\Http\Controllers\Api\Wa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\It\ItLogError;

use Illuminate\Support\Facades\Validator;

class WaLogErrorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      // $this->middleware('auth');
    }

    /**
     * Show All Data HrPeriod
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      return view("wa.log_error");
    }

    /**
     * Show JSON Data HrPeriod.
     *
     * @return DataTables
     */
    public function datatable()
    {

      $DataTables = ItLogError::select(
        'it_log_error.*',
        'users.name as users_name',
      )
      ->leftJoin('users','users.id', 'it_log_error.users_id');

      if (request('it_log_error_status')=="Fixed" || request('it_log_error_status')=="Not Fixed") {
        $DataTables = $DataTables->where('it_log_error.it_log_error_status', request('it_log_error_status'));
      }

      return datatables($DataTables)->toJson();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Add Update HrPeriods.
     *
     * @return Response JSON
     */

    /**
     * Show list HrPeriod.
     *
     * @return Response JSON
     */
    public function find($id = NULL)
    {
      $data = ItLogError::select(
        'it_log_error.*',
      )
      ->findOrFail($id);

      return response()->json(['error' => false, 'messages'=>$data]);
    }

    /**
     * Show list HrPeriod.
     *
     * @return Response JSON
     */
    public function select2()
    {
      $data = ItLogError::select('it_log_error_id as id', 'it_log_error_name as text', DB::raw('IF(it_log_error_status="Active", FALSE, TRUE) as disabled'))->where('it_log_error_name','like',"%" . request('q') . "%")->orderBy('it_log_error_id', 'DESC')->limit(25)->get();

      return response()->json(["results" => $data]);
    }

     /**
     * Aktifkan HrPeriod.
     *
     * @return \Illuminate\Http\Response 
     */
     public function fixed($id)
     {
      ItLogError::findOrFail($id)->update(["it_log_error_status"=> "Fixed"]);
      return response()->json(['error' => false, 'messages'=> "Error Fixed"]);
    }

    /**
     * Non Aktif HrPeriod.
     *
     * @return \Illuminate\Http\Response 
     */
    public function notfixed($id)
    {
      ItLogError::findOrFail($id)->update(["it_log_error_status"=> "Not Fixed"]);
      return response()->json(['error' => false, 'messages'=> "Error Not Fixed"]);
    }

    /**
     * Delete By Id.
     *
     * @return \Illuminate\Http\Response 
     */
    public function delete($id)
    {
      $ItLogError = ItLogError::findOrFail($id);
      $ItLogError->delete();

      return response()->json(['error' => false, 'messages'=>'Data Log Error Berhasil Dihapus']);
    }
  }
