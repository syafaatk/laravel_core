<?php

namespace App\Http\Controllers\Master\Sales;

use App\Http\Controllers\CoreController as Controller;
use App\Http\Requests\Master\Sales\UnitRequest as ValidateRequest;

class UnitController extends Controller
{
    /**
    * Global Variable
    */
    public $index_page = 'master.sales.unit.index';
    public $root_route = 'master.sales.unit';
    public $table      = 'master_unit';
    public $menu_name  = 'Satuan';
    public $model      = 'App\Models\Master\MasterUnit';

    /**
     * level role init
     *
     * @return $data
     */
    function roleMenu(){
      return array('Data Master', 'Master Penjualan', 'Satuan');
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
      return array([
        'master_unit_id',
        'master_unit_alias',
        'master_unit_name',
        'master_unit_status',
        'created_at',
        'updated_at',
      ]);
    }
  }
