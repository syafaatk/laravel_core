<?php

namespace App\Http\Controllers\Master\Sales;

use App\Http\Controllers\CoreController as Controller;
use App\Http\Requests\Master\Sales\{ItemRequest, ItemUpdateRequest};

use Illuminate\Support\Facades\DB;
use App\Models\Master\MasterItem as Item;


class ItemController extends Controller
{
    /**
    * Global Variable
    */
    public $index_page = 'master.sales.item.index';
    public $root_route = 'master.sales.item';
    public $table      = 'master_item';
    public $menu_name  = 'Item';
    public $model      = 'App\Models\Master\MasterItem';

    /**
     * level role init
     *
     * @return $data
     */
    function roleMenu(){
      return array('Data Master', 'Master Penjualan', 'Item');
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
          'table'   =>'master_unit',
          'primary' =>'master_unit.master_unit_id',
          'foreign' =>'master_item.master_unit_id'
        ),
        array(
          'type'    =>'left',
          'table'   =>'master_supplier',
          'primary' =>'master_supplier.master_supplier_id',
          'foreign' =>'master_item.master_supplier_id'
        ),
        array(
          'type'    =>'left',
          'table'   =>'master_brand',
          'primary' =>'master_brand.master_brand_id',
          'foreign' =>'master_item.master_brand_id'
        ),
        array(
          'type'    =>'left',
          'table'   =>'master_warehouse',
          'primary' =>'master_warehouse.master_warehouse_id',
          'foreign' =>'master_item.master_warehouse_id'
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
          'request' =>'master_warehouse_id',
          'field'   =>'master_item.master_warehouse_id',
        ),
        array(
          'request' =>'master_brand_id',
          'field'   =>'master_item.master_brand_id',
        ),
        array(
          'request' =>'master_supplier_id',
          'field'   =>'master_item.master_supplier_id',
        ),
      );
    }

    /**
     * Custom Select 
     *
     * @return null or array
     */
    public function customSelect2(){
      return array([
        'id'       => 'master_item_id as id',
        'text'     => DB::raw('CONCAT(master_item_name, " (Stok ", FORMAT(master_item_stock,2), " ", master_unit_name , ")") AS text'),
        'disabled' => DB::raw('IF(master_item_status="Active", FALSE, TRUE) as disabled'),
        'search'   => 'master_item_name',
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(ItemRequest $validation){

      $data = $validation->getData();

      if (request()->file('master_item_file')!="") {
        $data['master_item_file'] = $this->handleUploadedFile(request()->file('master_item_file'), 'item');
      }

      return $this->addProcess($data);
    }

    /**
     * Add Update Items.
     *
     * @return Response JSON
     */
    public function update(ItemUpdateRequest $validation, $id)
    {
      $data = $validation->getData();

      if (request()->file('master_item_file')!="") {
        $data['master_item_file'] = $this->handleUploadedFile(request()->file('master_item_file'), 'item');
      }
      
      return $this->updateProcess($id, $data);
    }
  }
