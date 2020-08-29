<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::prefix('drivers')->group(function () {

    Route::get('/', 'DriverController@index');
    Route::post('/', 'DriverController@store');
    Route::get('{driver}', 'DriverController@show');
    Route::put('{driver}', 'DriverController@update');
    Route::patch('{driver}', 'DriverController@update');
    Route::delete('{driver}', 'DriverController@destroy');

});

Route::prefix('owners')->group(function () {

    Route::get('/', 'OwnerController@index');
    Route::post('/', 'OwnerController@store');
    Route::get('{owner}', 'OwnerController@show');
    Route::put('{owner}', 'OwnerController@update');
    Route::patch('{owner}', 'OwnerController@update');
    Route::delete('{owner}', 'OwnerController@destroy');

});

Route::prefix('vehicles')->group(function () {

    Route::get('/', 'VehicleController@index');
    Route::post('/', 'VehicleController@store');
    Route::get('{vehicle}', 'VehicleController@show');
    Route::put('{vehicle}', 'VehicleController@update');
    Route::patch('{vehicle}', 'VehicleController@update');
    Route::delete('{vehicle}', 'VehicleController@destroy');

});
