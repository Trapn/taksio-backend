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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//TODO
Route::get('index', 'UserController@index');
Route::post('register', 'UserController@register');

// This routes are for test purpose at the frontend
Route::post('locations', 'LocationsController@store');
Route::post('sensors', 'SensorsController@store');
Route::post('devices', 'DevicesController@store');

Route::post('taxiRequest', 'TaxiRequestController@store');
Route::get('analytics', 'TaxiRequestController@index');

//Login for posting
Route::post('login', 'UserController@login');
Route::group(['middleware' => 'auth:api'], function(){
    Route::get('details', 'UserController@details');
    //Route::post('locations', 'LocationsController@store');
    //Route::post('sensors', 'SensorsController@store');
    //Route::post('devices', 'DevicesController@store');
});

