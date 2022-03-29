<?php

namespace App\Http\Controllers\Master\Crud;

use App\Http\Controllers\CoreController as Controller;
use App\Http\Requests\Master\Crud\ProvinceRequest as ValidateRequest;

class ProvinceController extends Controller
{
/**
    * Global Variable
    */
    public $index_page = 'master.crud.province.index';
    public $root_route = 'master.crud.province';
    public $table      = 'province';
    public $menu_name  = 'Province';
    public $model      = 'App\Models\Crud\CrudProvince';

    /**
     * level role init
     *
     * @return $data
     */
    function roleMenu(){
    return array('Data Master', 'Crud', 'Province');
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(ValidateRequest $validation){
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
  }
