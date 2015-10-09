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

define('CONTROL_PANEL_PREFIX', 'admin');
define('CONTROL_PANEL_FOLDER', 'Admin');

Route::group(array('prefix' => CONTROL_PANEL_PREFIX), function() {
	foreach (['products'=>'Product'] as $k=>$v) {
		Route::resource('products', CONTROL_PANEL_FOLDER.'\\'.$v.'Controller', [
			'names' =>[
				'index' => CONTROL_PANEL_PREFIX.'.'.$k,
				'create' => CONTROL_PANEL_PREFIX.'.'.$k.'.create',
				'update' => CONTROL_PANEL_PREFIX.'.'.$k.'.update',
				'store' => CONTROL_PANEL_PREFIX.'.'.$k.'.store',
				'edit' => CONTROL_PANEL_PREFIX.'.'.$k.'.edit',
				'destroy' => CONTROL_PANEL_PREFIX.'.'.$k.'.destroy',
			]
		]);
	}
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gps', 'GPSController@index');
// Route::get('/gps', ['as'=>'gps' , 'uses'=>'GPSController@index']); naming route
