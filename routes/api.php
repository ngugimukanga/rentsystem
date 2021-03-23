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
Route::apiResource('/landlords', 'LandlordController');
Route::get('/landlords', 'LandlordController@index');
Route::get('/landlord/{landlord}', 'LandlordController@show');
Route::put('/landlord/{landlord}', 'LandlordController@update');
Route::post('/landlords', 'LandlordController@store');
Route::delete('/landlords/{landlord}','LandlordController@destroy');



Route::apiResource('/apartments', 'ApartmentController');
Route::get('/apartments', 'LandlordController@index');
Route::get('/apartments/{apartment}', 'ApartmentController@show');
Route::put('/apartments/{apartment}', 'ApartmentController@update');
Route::post('/apartments', 'ApartmentController@store');
Route::delete('/apartments/{apartment}','ApartmentController@destroy');

Route::apiResource('/payments', 'PaymentController');
Route::apiResource('/units', 'UnitController');
