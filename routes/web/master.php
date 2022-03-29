<?php
// Contoh Membuat Custom Route Ada Pada App/Provider/RouteServiceProvider.php

Route::group(['as'=>'master.'], function () {
	// Master Access Control List
	Route::group(['prefix' => 'acl', 'as'=>'acl.'], function () {
		Route::group(['prefix' => 'users', 'as'=>'users.'], function () {
			Route::get('index', 'UserController@index')->name('index');
			Route::get('find/{id?}', 'UserController@find')->name('find');
			Route::get('select2', 'UserController@select2')->name('select2');
			Route::post('add', 'UserController@add')->name('add');
			Route::get('reset_password/{id?}', 'UserController@reset_password')->name('reset_password');
			Route::get('active/{id?}', 'UserController@active')->name('active');
			Route::get('nonactive/{id?}', 'UserController@nonactive')->name('nonactive');
			Route::post('update/{id?}', 'UserController@update')->name('update');
			Route::post('delete/{id?}', 'UserController@delete')->name('delete');
			Route::post('datatable', 'UserController@datatable')->name('datatable');
		});

		Route::group(['prefix' => 'users_group', 'as'=>'users_group.'], function () {
			Route::get('index', 'UsersGroupController@index')->name('index');
			Route::get('find/{id?}', 'UsersGroupController@find')->name('find');
			Route::get('select2', 'UsersGroupController@select2')->name('select2');
			Route::post('add', 'UsersGroupController@add')->name('add');
			Route::get('active/{id?}', 'UsersGroupController@active')->name('active');
			Route::get('nonactive/{id?}', 'UsersGroupController@nonactive')->name('nonactive');
			Route::post('update/{id?}', 'UsersGroupController@update')->name('update');
			Route::post('delete/{id?}', 'UsersGroupController@delete')->name('delete');
			Route::post('datatable', 'UsersGroupController@datatable')->name('datatable');
		});
	});

	// Master Sales
	Route::group(['prefix' => 'sales', 'namespace'=>'Sales', 'as'=>'sales.'], function () {
		Route::group(['prefix' => 'warehouse', 'as'=>'warehouse.'], function () {
			Route::get('index', 'WarehouseController@index')->name('index');
			Route::get('find/{id?}', 'WarehouseController@find')->name('find');
			Route::get('select2', 'WarehouseController@select2')->name('select2');
			Route::post('add', 'WarehouseController@add')->name('add');
			Route::get('active/{id?}', 'WarehouseController@active')->name('active');
			Route::get('nonactive/{id?}', 'WarehouseController@nonactive')->name('nonactive');
			Route::post('update/{id?}', 'WarehouseController@update')->name('update');
			Route::post('delete/{id?}', 'WarehouseController@delete')->name('delete');
			Route::post('datatable', 'WarehouseController@datatable')->name('datatable');
		});

		Route::group(['prefix' => 'brand', 'as'=>'brand.'], function () {
			Route::get('index', 'BrandController@index')->name('index');
			Route::get('find/{id?}', 'BrandController@find')->name('find');
			Route::get('select2', 'BrandController@select2')->name('select2');
			Route::post('add', 'BrandController@add')->name('add');
			Route::get('active/{id?}', 'BrandController@active')->name('active');
			Route::get('nonactive/{id?}', 'BrandController@nonactive')->name('nonactive');
			Route::post('update/{id?}', 'BrandController@update')->name('update');
			Route::post('delete/{id?}', 'BrandController@delete')->name('delete');
			Route::post('datatable', 'BrandController@datatable')->name('datatable');
		});

		Route::group(['prefix' => 'unit', 'as'=>'unit.'], function () {
			Route::get('index', 'UnitController@index')->name('index');
			Route::get('find/{id?}', 'UnitController@find')->name('find');
			Route::get('select2', 'UnitController@select2')->name('select2');
			Route::post('add', 'UnitController@add')->name('add');
			Route::get('active/{id?}', 'UnitController@active')->name('active');
			Route::get('nonactive/{id?}', 'UnitController@nonactive')->name('nonactive');
			Route::post('update/{id?}', 'UnitController@update')->name('update');
			Route::post('delete/{id?}', 'UnitController@delete')->name('delete');
			Route::post('datatable', 'UnitController@datatable')->name('datatable');
		});

		Route::group(['prefix' => 'supplier', 'as'=>'supplier.'], function () {
			Route::get('index', 'SupplierController@index')->name('index');
			Route::get('find/{id?}', 'SupplierController@find')->name('find');
			Route::get('select2', 'SupplierController@select2')->name('select2');
			Route::post('add', 'SupplierController@add')->name('add');
			Route::get('active/{id?}', 'SupplierController@active')->name('active');
			Route::get('nonactive/{id?}', 'SupplierController@nonactive')->name('nonactive');
			Route::post('update/{id?}', 'SupplierController@update')->name('update');
			Route::post('delete/{id?}', 'SupplierController@delete')->name('delete');
			Route::post('datatable', 'SupplierController@datatable')->name('datatable');
		});

		Route::group(['prefix' => 'supplier_category', 'as'=>'supplier_category.'], function () {
			Route::get('index', 'SupplierCategoryController@index')->name('index');
			Route::get('find/{id?}', 'SupplierCategoryController@find')->name('find');
			Route::get('select2', 'SupplierCategoryController@select2')->name('select2');
			Route::post('add', 'SupplierCategoryController@add')->name('add');
			Route::get('active/{id?}', 'SupplierCategoryController@active')->name('active');
			Route::get('nonactive/{id?}', 'SupplierCategoryController@nonactive')->name('nonactive');
			Route::post('update/{id?}', 'SupplierCategoryController@update')->name('update');
			Route::post('delete/{id?}', 'SupplierCategoryController@delete')->name('delete');
			Route::post('datatable', 'SupplierCategoryController@datatable')->name('datatable');
		});

		Route::group(['prefix' => 'item', 'as'=>'item.'], function () {
			Route::get('index', 'ItemController@index')->name('index');
			Route::get('find/{id?}', 'ItemController@find')->name('find');
			Route::get('select2', 'ItemController@select2')->name('select2');
			Route::post('add', 'ItemController@add')->name('add');
			Route::get('active/{id?}', 'ItemController@active')->name('active');
			Route::get('nonactive/{id?}', 'ItemController@nonactive')->name('nonactive');
			Route::post('update/{id?}', 'ItemController@update')->name('update');
			Route::post('delete/{id?}', 'ItemController@delete')->name('delete');
			Route::post('datatable', 'ItemController@datatable')->name('datatable');
		});

		Route::group(['prefix' => 'produk', 'as'=>'produk.'], function () {
			Route::get('index', 'ProdukController@index')->name('index');
			Route::get('find/{id?}', 'ProdukController@find')->name('find');
			Route::get('select2', 'ProdukController@select2')->name('select2');
			Route::post('add', 'ProdukController@add')->name('add');
			Route::get('active/{id?}', 'ProdukController@active')->name('active');
			Route::get('nonactive/{id?}', 'ProdukController@nonactive')->name('nonactive');
			Route::post('update/{id?}', 'ProdukController@update')->name('update');
			Route::post('delete/{id?}', 'ProdukController@delete')->name('delete');
			Route::post('datatable', 'ProdukController@datatable')->name('datatable');
		});

		Route::group(['prefix' => 'kategori', 'as'=>'kategori.'], function () {
			Route::get('index', 'KategoriController@index')->name('index');
			Route::get('find/{id?}', 'KategoriController@find')->name('find');
			Route::get('select2', 'KategoriController@select2')->name('select2');
			Route::post('add', 'KategoriController@add')->name('add');
			Route::get('active/{id?}', 'KategoriController@active')->name('active');
			Route::get('nonactive/{id?}', 'KategoriController@nonactive')->name('nonactive');
			Route::post('update/{id?}', 'KategoriController@update')->name('update');
			Route::post('delete/{id?}', 'KategoriController@delete')->name('delete');
			Route::post('datatable', 'KategoriController@datatable')->name('datatable');
		});

	});

	/*
	*/
	Route::group(['prefix' => 'general', 'namespace'=>'General', 'as'=>'general.'], function () {
		Route::group(['prefix' => 'city', 'as'=>'city.'], function () {
			Route::get('index', 'CityController@index')->name('index');
			Route::get('find/{id?}', 'CityController@find')->name('find');
			Route::get('select2', 'CityController@select2')->name('select2');
			Route::post('add', 'CityController@add')->name('add');
			Route::get('active/{id?}', 'CityController@active')->name('active');
			Route::get('nonactive/{id?}', 'CityController@nonactive')->name('nonactive');
			Route::post('update/{id?}', 'CityController@update')->name('update');
			Route::post('delete/{id?}', 'CityController@delete')->name('delete');
			Route::post('datatable', 'CityController@datatable')->name('datatable');
		});
	});

	Route::group(['prefix' => 'crud', 'namespace'=>'Crud', 'as'=>'crud.'], function () {
		Route::group(['prefix' => 'province', 'as'=>'province.'], function () {
			Route::get('index', 'ProvinceController@index')->name('index');
			Route::get('find/{id?}', 'ProvinceController@find')->name('find');
			Route::get('select2', 'ProvinceController@select2')->name('select2');
			Route::post('add', 'ProvinceController@add')->name('add');
			Route::get('active/{id?}', 'ProvinceController@active')->name('active');
			Route::get('nonactive/{id?}', 'ProvinceController@nonactive')->name('nonactive');
			Route::post('update/{id?}', 'ProvinceController@update')->name('update');
			Route::post('delete/{id?}', 'ProvinceController@delete')->name('delete');
			Route::post('datatable', 'ProvinceController@datatable')->name('datatable');
		});
	});
	


});
