<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(array('prefix' => 'admin'), function() {
	Route::resource('products', 'Admin\ProductController', [
		'names' =>[
			'index' => 'admin.products',
			'create' => 'admin.products.create',
		]
	]);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gps', 'GPSController@index');
// Route::get('/gps', ['as'=>'gps' , 'uses'=>'GPSController@index']); naming route
