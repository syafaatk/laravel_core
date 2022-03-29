<?php

namespace App\Http\Controllers\Master;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CoreController as Controller;
use App\Http\Requests\Master\UserRequest as ValidateRequest;

class UserController extends Controller
{
    /**
    * Global Variable
    */
    public $index_page = 'master.users.index';
    public $root_route = 'master.acl.users';
    public $table      = 'users';
    public $menu_name  = 'Pengguna';
    public $model      = 'App\User';

    /**
     * Reset Password.
     *
     * @return \Illuminate\Http\Response 
     */
    public function reset_password($id)
    {

      $model  = new $this->model();
      $find   = $model->findOrFail($id);

      $find->update(["password"=> bcrypt("12345678")]);

      return response()->json(['error' => false, 'messages'=> "Password Berhasil Direset Menjadi 12345678"]);
    }

    /**
     * level role init
     *
     * @return $data
     */
    function roleMenu(){
      return array('Data Master', 'Access Control', 'Users');
    }

    /**
     * custom join table
     *
     * @return $data
     */
    public function joinTable() { 
      return array(
        array(
          'type'    =>'left',
          'table'   =>'users_group',
          'primary' =>'users.users_group_id',
          'foreign' =>'users_group.users_group_id',
        ),
      );
    }

    /**
     * custom where table on datatables
     *
     * @return $data
     */
    public function customWhere() { 
      return array(
        array(
          'request' =>'status',
          'field'   =>'users.status',
        ),
        array(
          'request' =>'users_group_id',
          'field'   =>'users_group.users_group_id',
        ),
      );
    }

    /**
     * Custom Select 
     *
     * @return null or array
     */
    public function customSelect2(){
      return array([
        'id'       => 'id',
        'text'     => 'name as text',
        'disabled' => DB::raw('IF(status="active", FALSE, TRUE) as disabled'),
        'search'   => 'name',
      ]);
    }

    /**
     * Declaration Data
     *
     * @return array();
     */
    function setData(){ return array(); }

    /**
     * Add New Users.
     *
     * @return Response JSON
     */
    public function add(ValidateRequest $validation)
    {
      request()->merge([
        'password' => bcrypt(request('password')??'12345678'),
        'status' => 'active',
      ]);

      return $this->addProcess();
    }

    /**
     * Add Update $modelss.
     *
     * @return Response JSON
     */
    public function update(ValidateRequest $validation, $id){
      return $this->updateProcess($id);
    }

    /**
     * Custom Status 
     *
     * @return null or array
     */
    public function customStatus(){ return 'status'; }

     /**
     * Custom Status 
     *
     * @return null or string
     */
     public function customActive(){ return 'active'; }

    /**
     * Custom Status 
     *
     * @return null or string
     */
    public function customNonActive(){ return 'nonactive'; }
  }
