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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/jadwal','JadwalController@index');
Route::get('/jadwal/{id}','JadwalController@show');
Route::post('/jadwal','JadwalController@store');
Route::get('/user','UserController@index');
Route::post('/user','UserController@store');