<?php

namespace App\Http\Controllers\Master\Sales;

use App\Http\Controllers\CoreController as Controller;
use App\Http\Requests\Master\Sales\KategoriRequest as ValidateRequest;

class KategoriController extends Controller
{
  /**
    * Global Variable
    */
    public $index_page = 'master.sales.kategori.index';
    public $root_route = 'master.sales.kategori';
    public $table      = 'master_kategori';
    public $menu_name  = 'Kategori';
    public $model      = 'App\Models\Master\MasterKategori';

    /**
     * level role init
     *
     * @return $data
     */
    function roleMenu(){
      return array('Data Master', 'Master Penjualan', 'Kategori');
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
      return 'master_kategori.*';
    }
  }
