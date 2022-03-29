<?php

namespace App\Http\Controllers\Master\Sales;

use App\Http\Controllers\CoreController as Controller;
use App\Http\Requests\Master\Sales\SupplierCategoryRequest as ValidateRequest;

class SupplierCategoryController extends Controller
{

  /**
    * Global Variable
    */
    public $index_page = 'master.sales.supplier_category.index';
    public $root_route = 'master.sales.supplier_category';
    public $table      = 'master_supplier_category';
    public $menu_name  = 'Kategori Supplier';
    public $model      = 'App\Models\Master\MasterSupplierCategory';

    /**
     * level role init
     *
     * @return $data
     */
    function roleMenu(){
      return array('Data Master', 'Master Penjualan', 'Kategori Supplier');
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
