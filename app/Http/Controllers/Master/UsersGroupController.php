<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\CoreController as Controller;
use App\Http\Requests\Master\UsersGroupRequest as ValidateRequest;

class UsersGroupController extends Controller
{
    /**
      * Global Variable
      */
    public $index_page = 'master.users.group.index';
    public $root_route = 'master.acl.users_group';
    public $table      = 'users_group';
    public $menu_name  = 'Users Group';
    public $model      = 'App\UsersGroup';

    /**
     * level role init
     *
     * @return $data
     */
    function roleMenu(){
      return array('Data Master', 'Master Penjualan', 'Brand');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(ValidateRequest $validation)
    {
      $data = $validation->getData();
      $data['users_group_access'] = str_replace("'", '', json_encode(request('access')));

      return $this->addProcess($data);
    }

    /**
     * Add Update $modelss.
     *
     * @return Response JSON
     */
    public function update(ValidateRequest $validation, $id){
      $data = $validation->getData();
      $data['users_group_access'] = str_replace("'", '', json_encode(request('access')));

      return $this->updateProcess($id, $data);
    }
  }
