<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{Cache, DB};
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class CoreController extends Controller
{
  	/**
      * Global Variable
      */
    public $root_route = null;
    public $index_page = null;
    public $table      = null;
    public $menu_name  = null;
    public $model      = null;

    /**
     * Display Index Pages
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      return $this->view($this->index_page);
    }

    /**
     * Display Index Pages
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view($view)
    {
      if ($this->index_page==null)
        return response()->json(['404'=>'Index Not Declared'], 404);

      if ($this->table==null)
        return response()->json(['404'=>'Table Not Declared'], 404);

      if ($this->menu_name==null)
        return response()->json(['404'=>'Menu Name Not Declared'], 404);

      if ($this->model==null)
        return response()->json(['404'=>'Model Not Declared'], 404);

      if(auth()->user()->status=="nonactive")
        return view('layouts.nonactive');

      if(gettype($this->setData())!=="NULL")
        $data = $this->setData();

      $data['index_page'] = $this->index_page;
      $data['table']      = $this->table;
      $data['menu_name']  = $this->menu_name;
      $data['access']     = $this->getAuthorization();

      // For View Role & Access
      $data['akses']      = $data['access']->akses??null;
      $data['Role']       = $data['access']->role??null;

      if ($data['access']->role==null)
        return response()->json(['error' => true, 'messages'=> "403 Access Not Allowed"]);

      return view($view, $data);
    }

    /**
     * Declaration Data
     *
     * @return array();
     */
    function setData(){

      if ($this->root_route==null)
        return null;

      return array(
        'route' => (object)array(
          'index'     => route("{$this->root_route}.index"),
          'add'       => route("{$this->root_route}.add"),
          'update'    => route("{$this->root_route}.update"),
          'find'      => route("{$this->root_route}.find"),
          'active'    => route("{$this->root_route}.active"),
          'nonactive' => route("{$this->root_route}.nonactive"),
          'delete'    => route("{$this->root_route}.delete"),
          'datatable' => route("{$this->root_route}.datatable")
        )
      );
    }

    /**
     * Get Authorization From Session
     *
     * @return $data
     */
    public function getAuthorization(){
      // check cache data
      if (Cache::has('access' . session('_token'))) {
        $akses  = json_decode(cache('access' . session('_token')));
      } else {
        // remeber cache data for 300 seconds
        $access = Cache::remember('access' . session('_token'), 300, function () {
          return auth()->user()->akses->users_group_access;
        });
        $akses  = json_decode($access);
      }

      // Init access
      $data['akses'] = $akses;
    	// Init role as access    		
      $data['role'] = $akses;

      if (gettype($this->roleMenu()) === "array") {
        foreach ($this->roleMenu() as $role) {
          if (property_exists($data['role'], $role)){
            $data['role'] = $data['role']->{$role};
          } else {
            $data['role'] = null;
          }
        }
      } else {
        $role = (string) $this->roleMenu();
        if (property_exists($data['role'], $role)){
          $data['role'] = $data['role']->{$role};
        } else {
          $data['role'] = null;
        }
      }

      return (object) $data;
    }

    /**
     * Show JSON Data.
     *
     * @return DataTables
     */
    public function datatable()
    {
      $status       = $this->customStatus()??"{$this->table}_status";
      $customSelect = $this->customSelectDataTable();
      $customWhere  = $this->customWhereDataTable();
      
      $dataTable    = $this->getMainModel();

      if (gettype($customSelect)==="array") {
        foreach ($customSelect as $select) {
          $dataTable = $dataTable->select($select);
        }
      } elseif (gettype($customSelect)==="string") {
        $dataTable = $dataTable->select($customSelect);
      }

      if (request($status)=="Active" || request($status)=="Non Active") {
        $dataTable = $dataTable->where("{$this->table}.{$status}", request($status));
      }

      if (gettype($customWhere)==="array") {
        foreach ($customWhere as $key => $where) {
          if (request("{$where['request']}"))
            $dataTable = $dataTable->where($where['field'], request("{$where['request']}"));
        }
      }

      return datatables($dataTable)->rawColumns(['master_produk_deskripsi', 'action'])->toJson();
    }

    /**
     * Get Models Core For Custom DataTables.
     *
     * @return models
     */
    public function getMainModel()
    {
    	if ($this->model==null)
    		return response()->json(['404'=>'Model Not Declared'], 404);

    	$model = new $this->model();

      $model = $model->query();

      if (gettype($this->joinTable())==="array") {
        foreach ($this->joinTable() as $key => $join) {
          if ($join['type']=="left"):
            $model = $model->leftJoin($join['table'], $join['primary'], $join['foreign']);
          elseif ($join['type']=="right"):
            $model = $model->rightJoin($join['table'], $join['primary'], $join['foreign']);
          elseif ($join['type']=="cross"):
            $model = $model->crossJoin($join['table'], $join['primary'], $join['foreign']);
          else:
            $model = $model->join($join['table'], $join['primary'], $join['foreign']);
          endif;
        }
      }

      return $model;
    }

    /**
     * Create resource.
     *
     * @param  array  $data
     * @param  string $type
     * @return \Illuminate\Http\Response
     */
    public function addProcess($data = null, $type = 'json'){

    	$role = $this->getAuthorization()->role;

    	if (!property_exists($role, 'Tambah'))
    		return response()->json(['error' => true, 'messages'=> "Anda Tidak Diizinkan Untuk Melakukan Tindakan Ini!"]);

    	if ($this->table==null)
    		return response()->json(['404'=>'Table Not Declared'], 404);

    	if ($this->menu_name==null)
    		return response()->json(['404'=>'Menu Name Not Declared'], 404);

    	if ($this->model==null)
    		return response()->json(['404'=>'Model Not Declared'], 404);

    	$model = new $this->model();

      if (gettype($data)==="NULL") {
        $model = $model->create(request()->all());
      } else {
        $model = $model->create($data);
      }

      $model['id']   = $model->{"{$this->table}_id"};
      $model['text'] = $model->{"{$this->table}_name"} . " ( " . ($model->{"{$this->table}_alias"}??'-') . " )";

      // If wont return not a json
      if ($type!=='json')
        return $model;

      return response()->json([
        'error'     =>  false,
        'data'      =>  $model,
        'trigger'   =>  "{$this->table}_id",
        'messages'  =>  "{$this->menu_name} Berhasil Ditambahkan"
      ]);
    }

    /**
     * Update By Id.
     *
     * @param  int    $id (primary key)
     * @param  array  $data (can be null)
     * @param  string $type
     * @return Response JSON
     */
    public function updateProcess($id, $data = null, $type = 'json')
    {
    	$role = $this->getAuthorization()->role;

    	if (!property_exists($role, 'Edit'))
    		return response()->json(['error' => true, 'messages'=> "Anda Tidak Diizinkan Untuk Melakukan Tindakan Ini!"]);

    	if ($this->menu_name==null)
    		return response()->json(['404'=>'Menu Name Not Declared'], 404);

    	if ($this->model==null)
    		return response()->json(['404'=>'Model Not Declared'], 404);

      $model 	= new $this->model();
      $find   = $model->findOrFail($id);

      if (gettype($data)==="NULL") {
        $find->update(request()->all());
      } else {
        $find->update($data);
      }

      // If wont return not a json
      if ($type!=='json')
        return $find;

      return response()->json(['error' => false, 'messages'=> "Data {$this->menu_name} Berhasil Diupdate"]);
    }

    /**
     * Find By Id.
     *
     * @param  int $id (primary key)
     * @return Response JSON
     */
    public function find($id)
    {
    	$role = $this->getAuthorization()->role;

    	if (!property_exists($role, 'Edit'))
    		return response()->json(['error' => true, 'messages'=> "Anda Tidak Diizinkan Untuk Melakukan Tindakan Ini!"]);

    	if ($this->model==null)
    		return response()->json(['404'=>'Model Not Declared'], 404);

      $model = $this->getMainModel();
      $data  = $model->findOrFail($id);

      return response()->json(['error' => false, 'messages'=>$data]);
    }

    /**
     * Select2.
     *
     * @param  int $limit (for limit output)
     * @return Response JSON
     */
    public function select2(int $limit = 25)
    {
    	if ($this->table==null)
    		return response()->json(['404'=>'Table Not Declared'], 404);

    	if ($this->model==null)
    		return response()->json(['404'=>'Model Not Declared'], 404);

      $status  = (string) $this->customStatus();
      $select2 = $this->customSelect2();

      $model   = $this->getMainModel();

      if (gettype($select2)==="NULL") {
        $data  = $model->select(
          "{$this->table}_id as id",
          "{$this->table}_name as text",
          DB::raw("IF({$status}='Active', FALSE, TRUE) as disabled")
        );

        if (request('q')) {
          $data = $data->where("{$this->table}_name",'like',"%" . request('q') . "%")->limit($limit)->get();
        } else {
          $data = $data->limit($limit)->get();
        }

      } else {

        $data = $model->select($select2['id'], $select2['text'], $select2['disabled']);

        if (request('q')) {
          if (gettype($select2['search']==="string")) {
            // if search only use 1 parameter
            $data = $data->where($select2['search'],'like',"%" . request('q') . "%")->limit($limit)->get();

          } else if (gettype($select2['search']==="array")) {
            // if search use multi parameters
            foreach ($select2['search'] as $name) {
              // check type of search with or / and clause
              if ($name['where']=='or') {
                $data = $data->orWhere($name['field'],'like',"%" . request('q') . "%");
              } else {
                $data = $data->where($name['field'],'like',"%" . request('q') . "%");
              }
            }

            // limit data
            $data = $data->limit($limit)->get();

          }

          $data = $data->limit($limit)->get();
        } else {
          $data = $data->limit($limit)->get();
        }
      }


      return response()->json(["results" => $data]);
    }

    /**
     * Active Status.
     *
     * @param  int $id (primary key)
     * @return \Illuminate\Http\Response
     */
    public function active($id)
    {
    	$role = $this->getAuthorization()->role;

    	if (!property_exists($role, 'Active Nonactive'))
    		return response()->json(['error' => true, 'messages'=> "Anda Tidak Diizinkan Untuk Melakukan Tindakan Ini!"]);

    	if ($this->table==null)
    		return response()->json(['404'=>'Table Not Declared'], 404);

    	if ($this->menu_name==null)
    		return response()->json(['404'=>'Menu Name Not Declared'], 404);

    	if ($this->model==null)
    		return response()->json(['404'=>'Model Not Declared'], 404);

      $status = (string) $this->customStatus();
      $active = (string) $this->customActive();

      $model  = new $this->model();
      $data   = $model->findOrFail($id)->update(["{$status}"=> "{$active}"]);

      return response()->json(['error' => false, 'messages'=> "{$this->menu_name} Berhasil Di Aktifkan"]);
    }

    /**
     * Nonactive Status.
     *
     * @param  int $id (primary key)
     * @return \Illuminate\Http\Response 
     */
    public function nonactive($id)
    {
    	$role = $this->getAuthorization()->role;

    	if (!property_exists($role, 'Active Nonactive'))
    		return response()->json(['error' => true, 'messages'=> "Anda Tidak Diizinkan Untuk Melakukan Tindakan Ini!"]);

    	if ($this->table==null)
    		return response()->json(['404'=>'Table Not Declared'], 404);

    	if ($this->menu_name==null)
    		return response()->json(['404'=>'Menu Name Not Declared'], 404);

    	if ($this->model==null)
    		return response()->json(['404'=>'Model Not Declared'], 404);

      $status    = (string) $this->customStatus();
      $nonactive = (string) $this->customNonActive();
      
      $model     = new $this->model();
      $data      = $model->findOrFail($id)->update(["{$status}" => "{$nonactive}"]);

      return response()->json(['error' => false, 'messages' => "{$this->menu_name} Berhasil Di Nonaktifkan"]);
    }

    /**
     * Delete By Id.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response 
     */
    public function delete($id)
    {
    	$role = $this->getAuthorization()->role;

    	if (!property_exists($role, 'Hapus'))
    		return response()->json(['error' => true, 'messages'=> "Anda Tidak Diizinkan Untuk Melakukan Tindakan Ini!"]);

    	if ($this->menu_name==null)
    		return response()->json(['404'=>'Menu Name Not Declared'], 404);

    	if ($this->model==null)
    		return response()->json(['404'=>'Model Not Declared'], 404);

      $model = new $this->model();
      $data  = $model->findOrFail($id);
      $data->delete();

      return response()->json(['error' => false, 'messages' => "Data {$this->menu_name} Berhasil Dihapus"]);
    }

    /**
     * Handle Upload File
     *
     * @param  Request $image
     * @param  string  $location
     * @return $filename
     */
    public function handleUploadedFile($image, $location)
    {
    	if (!is_null($image)) {
    		$filename = md5(date('ymdhis') . Str::random(32)) . "." . $image->extension();

    		$dirLocation = substr(md5('uploads'),0,8) . "/{$location}/";

    		$image->move(public_path($dirLocation), $filename);

    		return $filename;
    	}
    }

    /**
     * Get Date First & Last Of Month.
     *
     * @return $date
     */
    public function getStartAndEndOfMonth()
    {

      $date['startOfMonth'] = request('date_start_search');
      $date['endOfMonth']   = request('date_end_search');

      $validateDate = Validator::make(request()->all(), [
        'date_start_search' => 'date_format:Y-m-d',
        'date_end_search'   => 'date_format:Y-m-d',
      ]);

      if ($validateDate->fails()) {
        $date['startOfMonth'] = Carbon::now()->startOfMonth()->toDateString();
        $date['endOfMonth']   = Carbon::now()->endOfMonth()->toDateString();
      }

      return $date;
    }

    /**
     * level role init
     *
     * @return $data
     */
    public function roleMenu(){ return null; }

    /**
     * custom join table
     *
     * @return $data
     */
    public function joinTable() { return null; }

    /**
     * custom select table
     *
     * @return $data
     */
    public function customSelectDataTable() { return null; }

    /**
     * custom where table
     *
     * @return $data
     */
    public function customWhereDataTable() { return null; }

    /**
     * Custom Select 
     *
     * @return null or array
     */
    public function customSelect2(){ return null; }

    /**
     * Custom Status 
     *
     * @return null or string
     */
    public function customActive(){ return "Active"; }

    /**
     * Custom Status 
     *
     * @return null or string
     */
    public function customNonActive(){ return "Non Active"; }

    /**
     * Custom Status 
     *
     * @return null or string
     */
    public function customStatus(){ return "{$this->table}_status"; }
  }