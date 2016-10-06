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

Route::get('/', 'HomeController@index')->middleware('auth');

Route::group(['prefix' => 'plant', 'middleware' => 'auth'], function(){
	Route::get('/', 'PlantController@index');
	Route::get('/new', 'PlantController@create');
	Route::post('/', 'PlantController@store');
	Route::get('/{id}/edit', 'PlantController@edit');
	Route::get('/{id}', 'PlantController@show');
	Route::post('/{id}', 'PlantController@update');
	Route::get('/{id}/delete', 'PlantController@delete');
	Route::post('/search', 'PlantController@search');
});

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function(){
	Route::get('/', 'UserController@index');
	Route::get('/new', 'UserController@create');
	Route::post('/', 'UserController@store');
	Route::get('/{id}', 'UserController@show');
	Route::get('/{id}/edit', 'UserController@edit');
	Route::get('/{id}/delete', 'UserController@delete');
	Route::post('/search', 'UserController@search');
});

Route::group(['prefix' => 'season', 'middleware' => 'auth'], function(){
	Route::get('/', 'SeasonController@index');
	Route::get('/new', 'SeasonController@create');
	Route::post('/', 'SeasonController@store');
	Route::get('/{id}', 'SeasonController@show');
	Route::get('/{id}/edit', 'SeasonController@edit');
	Route::post('/{id}', 'SeasonController@update');
	Route::get('/{id}/delete', 'SeasonController@delete');
});

Route::group(['prefix' => 'scan', 'middleware' => 'auth'], function(){
	Route::get('/', 'ScanController@index');
	Route::get('/{id}/delete', 'ScanController@delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
