<?php

namespace App\Http\Controllers\Master\Sales;

use App\Http\Controllers\CoreController as Controller;
use App\Http\Requests\Master\Sales\SupplierRequest as ValidateRequest;

class SupplierController extends Controller
{
  /**
    * Global Variable
    */
  public $index_page = 'master.sales.supplier.index';
  public $root_route = 'master.sales.supplier';
  public $table      = 'master_supplier';
  public $menu_name  = 'Supplier';
  public $model      = 'App\Models\Master\MasterSupplier';

    /**
     * level role init
     *
     * @return $data
     */
    function roleMenu(){
      return array('Data Master', 'Master Penjualan', 'Supplier');
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
          'table'   =>'master_brand',
          'primary' =>'master_brand.master_brand_id',
          'foreign' =>'master_supplier.master_brand_id'
        ),
        array(
          'type'    =>'left',
          'table'   =>'master_city',
          'primary' =>'master_city.master_city_id',
          'foreign' =>'master_supplier.master_city_id',
        ),
        array(
          'type'    =>'left',
          'table'   =>'master_supplier_category',
          'primary' =>'master_supplier_category.master_supplier_category_id',
          'foreign' =>'master_supplier.master_supplier_category_id',
        ),
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
          'request' =>'master_supplier_category_id',
          'field'   =>'master_supplier_category.master_supplier_category_id',
        ),
        array(
          'request' =>'master_city_id',
          'field'   =>'master_city.master_city_id',
        ),
        array(
          'request' =>'master_brand_id',
          'field'   =>'master_brand.master_brand_id',
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
