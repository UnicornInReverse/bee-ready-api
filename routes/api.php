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
Route::get('/plant/{ofset?}', 'PlantController@showList');
Route::post('/scan', 'ScanController@store');
Route::post('/area', 'AreaController@show');
