<?php

namespace App\Http\Controllers\Master\Crud;

use App\Http\Controllers\CoreController as Controller;
use App\Http\Requests\Master\Crud\CountryRequest as ValidateRequest;

class CountryController extends Controller
{
/**
    * Global Variable
    */
    public $index_page = 'master.crud.country.index';
    public $root_route = 'master.crud.country';
    public $table      = 'country';
    public $menu_name  = 'Negara';
    public $model      = 'App\Models\Crud\CrudCountry';

    /**
     * level role init
     *
     * @return $data
     */
    function roleMenu(){
    return array('Data Master', 'Crud', 'Negara');
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
