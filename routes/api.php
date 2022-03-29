<?php

use Illuminate\Http\Request;

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
Route::post('auth/refresh', 'Api\LoginController@refresh');

Route::group(['middleware' => 'auth:api', 'prefix' => 'v1', 'as'=>'api.'], function(){
	Route::post('details', 'Api\LoginController@details');

	Route::post('/profile', 'HomeController@profile');

	/*
	*/
	Route::group(['prefix' => 'master', 'namespace'=>'Master', 'as'=>'master.'], function () {

		// Master Access Control List
		Route::group(['prefix' => 'acl', 'as'=>'acl.'], function () {
			Route::group(['prefix' => 'users', 'as'=>'users.'], function () {
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
				Route::get('find/{id?}', 'ItemController@find')->name('find');
				Route::get('select2', 'ItemController@select2')->name('select2');
				Route::post('add', 'ItemController@add')->name('add');
				Route::get('active/{id?}', 'ItemController@active')->name('active');
				Route::get('nonactive/{id?}', 'ItemController@nonactive')->name('nonactive');
				Route::post('update/{id?}', 'ItemController@update')->name('update');
				Route::post('delete/{id?}', 'ItemController@delete')->name('delete');
				Route::post('datatable', 'ItemController@datatable')->name('datatable');
			});

		});
	});
});

Route::get('why', 'Api\CrontabTesterController@find');