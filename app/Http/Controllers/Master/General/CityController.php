<?php

namespace App\Http\Controllers\Master\General;

use App\Http\Controllers\CoreController as Controller;
use App\Http\Requests\Master\General\CityRequest as ValidateRequest;

class CityController extends Controller
{
  /**
    * Global Variable
    */
    public $index_page = 'master.general.city.index';
    public $root_route = 'master.general.city';
    public $table      = 'master_city';
    public $menu_name  = 'Kota';
    public $model      = 'App\Models\Master\MasterCity';

    /**
     * level role init
     *
     * @return $data
     */
    function roleMenu(){
      return array('Data Master', 'Master General', 'Kota');
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
