<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'plant', 'middleware' => 'auth'], function(){
	Route::get('/', 'PlantController@index');
	Route::get('/new', 'PlantController@create');
	Route::post('/', 'PlantController@store');
	Route::get('/{id}/edit', 'PlantController@edit');
	Route::get('/{id}', 'PlantController@show');
	Route::post('/{id}', 'PlantController@update');
	Route::post('/{id}/delete', 'PlantController@delete');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
