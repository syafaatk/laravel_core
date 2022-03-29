<?php

namespace App\Http\Controllers\Master\Sales;

use App\Http\Controllers\CoreController as Controller;
use App\Http\Requests\Master\Sales\BrandRequest as ValidateRequest;

class BrandController extends Controller
{
  /**
    * Global Variable
    */
    public $index_page = 'master.sales.brand.index';
    public $root_route = 'master.sales.brand';
    public $table      = 'master_brand';
    public $menu_name  = 'Brand';
    public $model      = 'App\Models\Master\MasterBrand';

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

    /**
     * custom select table
     *
     * @return $data
     */
    public function customSelectDataTable() {
      return 'master_brand.*';
    }
  }
