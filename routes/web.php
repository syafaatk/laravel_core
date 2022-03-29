<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('auth.login');
});

Auth::routes();

Route::get('sso/google', 'Api\GoogleController@redirect')->name('sso.google');
Route::get('sso/google/callback', 'Api\GoogleController@callback');

Route::get('sso/facebook', 'Api\FacebookController@redirect')->name('sso.facebook');
Route::get('sso/facebook/callback', 'Api\FacebookController@callback');

Route::get('sso/github', 'Api\GithubController@redirect')->name('sso.github');
Route::get('sso/github/callback', 'Api\GithubController@callback');

Route::get('sso/twitter', 'Api\TwitterController@redirect')->name('sso.twitter');
Route::get('sso/twitter/callback', 'Api\TwitterController@callback');

Route::get('sso/linkedin', 'Api\LinkedInController@redirect')->name('sso.linkedin');
Route::get('sso/linkedin/callback', 'Api\LinkedInController@callback');

Route::get('logout', function() { return redirect('home'); });

Route::get('refresh-csrf', function(){
	return response()->json(['error'=>false, 'token' => csrf_token() ]);
});

Route::post('keep-token-alive', function() {
	return response()->json(['error'=>false, 'msg' => 'Done']);
});

Route::group(['prefix' => 'api', 'namespace'=>'Api', 'as'=>'api.'], function () {
	Route::group(['prefix' => 'wa', 'namespace'=>'Wa', 'as'=>'wa.'], function () {
		Route::get('index/{type?}', 'WaController@index')->name('index');
		Route::post('saveconfigwa/{type?}', 'WaController@saveConfigWa')->name('saveconfigwa');
		Route::post('send/{type?}', 'WaController@send')->name('send');
		Route::post('sendError', 'WaController@sendError')->name('sendError');
		Route::get('find/{type?}', 'WaController@find')->name('find');
		
		Route::group(['prefix' => 'log_error', 'as'=>'log_error.'], function () {
			Route::get('index', 'WaLogErrorController@index')->name('index');
			Route::get('find/{id?}', 'WaLogErrorController@find')->name('find');
			Route::get('select2', 'WaLogErrorController@select2')->name('select2');
			Route::get('fixed/{id?}', 'WaLogErrorController@fixed')->name('fixed');
			Route::get('notfixed/{id?}', 'WaLogErrorController@notfixed')->name('notfixed');
			Route::post('delete/{id?}', 'WaLogErrorController@delete')->name('delete');
			Route::post('datatable', 'WaLogErrorController@datatable')->name('datatable');
		});
	});
});

Route::group(['middleware' => ['web','cache.headers','auth']], function () {

	Route::get('/home', function() {
		// Get Default Route After Login
		return redirect(auth()->user()->akses->user_group_default_pages);
	})->name('home');
	
	Route::get('/home/dashboard', 'HomeController@index')->name('default_home');

	Route::post('/profile', 'HomeController@profile');
	Route::get('/profile', 'HomeController@formProfile')->name('profile');
	
});