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

Route::post('register', 'UserController@register');

Route::post('taxiRequest', 'TaxiRequestController@store');
Route::get('analytics', 'TaxiRequestController@index');

Route::post('addTaxi', 'TaxiController@store');
Route::get('taxiIndex', 'TaxiController@index');

Route::post('taxiResponse', 'TaxiResponseController@store');
Route::get('taxiResponse', 'TaxiResponseController@index');


//Login for posting
Route::post('login', 'UserController@login');
Route::group(['middleware' => 'auth:api'], function(){
    Route::get('details', 'UserController@details');

});

