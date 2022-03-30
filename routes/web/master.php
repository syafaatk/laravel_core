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

});
