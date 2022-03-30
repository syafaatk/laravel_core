<?php

namespace App\Http\Controllers\Master\Sales;

use App\Http\Controllers\CoreController as Controller;
use App\Http\Requests\Master\Sales\{ProdukRequest, ProdukUpdateRequest};

use Illuminate\Support\Facades\DB;
use App\Models\Master\MasterProduk as Item;


class ProdukController extends Controller
{
    /**
    * Global Variable
    */
    public $index_page = 'master.sales.produk.index';
    public $root_route = 'master.sales.produk';
    public $table      = 'master_produk';
    public $menu_name  = 'Produk';
    public $model      = 'App\Models\Master\MasterProduk';

    /**
     * level role init
     *
     * @return $data
     */
    function roleMenu(){
      return array('Data Master', 'Master Penjualan', 'Produk');
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
          'table'   =>'master_kategori',
          'primary' =>'master_kategori.master_kategori_id',
          'foreign' =>'master_produk.master_kategori_id'
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
          'request' =>'master_kategori_id',
          'field'   =>'master_produk.master_kategori_id',
        ),
      );
    }

    /**
     * Custom Select 
     *
     * @return null or array
     */
    public function customSelect2(){
      return array(
        'id'       => 'master_produk_id as id',
        'text'     => DB::raw('CONCAT(master_produk_name, " ( Kategori ", master_kategori_name , " )") AS text'),
        'disabled' => DB::raw('IF(master_produk_status="Active", FALSE, TRUE) as disabled'),
        'search'   => 'master_produk_name'
      );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(ProdukRequest $validation){

      $data = $validation->getData();

      if (request()->file('master_produk_file')!="") {
        $data['master_produk_file'] = $this->handleUploadedFile(request()->file('master_produk_file'), 'item');
      }

      return $this->addProcess($data);
    }

    /**
     * Add Update Produk.
     *
     * @return Response JSON
     */
    public function update(ProdukUpdateRequest $validation, $id)
    {
      $data = $validation->getData();

      if (request()->file('master_produk_file')!="") {
        $data['master_produk_file'] = $this->handleUploadedFile(request()->file('master_produk_file'), 'item');
      }
      
      return $this->updateProcess($id, $data);
    }
  }
