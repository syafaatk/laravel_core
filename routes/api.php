<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('auth/login', 'Api\LoginController@login');
// Route::post('auth/refresh', 'Api\LoginController@refresh');

Route::group(['middleware' => 'auth:api', 'prefix' => 'v1', 'as'=>'api.'], function(){
	Route::post('details', 'Api\LoginController@details');

	Route::post('/profile', 'HomeController@profile');

	// Master Data Group
	Route::group(['prefix' => 'master', 'namespace'=>'Master', 'as'=>'master.'], function () {

		// Master Sales
		Route::group(['prefix' => 'sales', 'namespace'=>'Sales', 'as'=>'sales.'], function () {
			Route::group(['prefix' => 'produk', 'as'=>'produk.'], function () {
				Route::post('index', 'ProdukController@datatable')->name('index');
				Route::get('find/{id?}', 'ProdukController@find')->name('find');
				Route::get('select2', 'ProdukController@select2')->name('select2');
				Route::post('add', 'ProdukController@add')->name('add');
				Route::get('active/{id?}', 'ProdukController@active')->name('active');
				Route::get('nonactive/{id?}', 'ProdukController@nonactive')->name('nonactive');
				Route::post('update/{id?}', 'ProdukController@update')->name('update');
				Route::post('delete/{id?}', 'ProdukController@delete')->name('delete');
			});
	
			Route::group(['prefix' => 'kategori', 'as'=>'kategori.'], function () {
				Route::post('index', 'KategoriController@datatable')->name('index');
				Route::get('find/{id?}', 'KategoriController@find')->name('find');
				Route::get('select2', 'KategoriController@select2')->name('select2');
				Route::post('add', 'KategoriController@add')->name('add');
				Route::get('active/{id?}', 'KategoriController@active')->name('active');
				Route::get('nonactive/{id?}', 'KategoriController@nonactive')->name('nonactive');
				Route::post('update/{id?}', 'KategoriController@update')->name('update');
				Route::post('delete/{id?}', 'KategoriController@delete')->name('delete');
			});

		});
	});
});