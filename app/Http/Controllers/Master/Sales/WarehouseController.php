<?php

namespace App\Http\Controllers\Master\Sales;

use App\Http\Controllers\CoreController as Controller;
use App\Http\Requests\Master\Sales\WarehouseRequest as ValidateRequest;

class WarehouseController extends Controller
{
    /**
    * Global Variable
    */
    public $table      = 'master_warehouse';
    public $root_route = 'master.sales.warehouse';
    public $index_page = 'master.sales.warehouse.index';
    public $menu_name  = 'Gudang';
    public $model      = 'App\Models\Master\MasterWarehouse';

    /**
     * level role init
     *
     * @return $data
     */
    function roleMenu(){
      return array('Data Master', 'Master Penjualan', 'Gudang');
    }

    /**
     * custom join table
     *
     * @return $data
     */
    public function joinTable() { 
      return array(
        array('type'=>'left', 'table'=>'master_city', 'primary'=>'master_city.master_city_id', 'foreign'=>'master_warehouse.master_city_id'),
      );
    }

    /**
     * custom where table on datatables
     *
     * @return $data
     */
    public function customWhereDataTable() { 
      return array(
        array(
          'request'=>'master_city_id',
          'field'=>'master_warehouse.master_city_id',
        ),
      );
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
