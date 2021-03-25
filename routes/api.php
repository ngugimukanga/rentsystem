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
Route::get('/landlords/{landlord}', 'LandlordController@show');
Route::put('/landlords/{landlord}', 'LandlordController@update');
Route::post('/landlords', 'LandlordController@store');
Route::delete('/landlords/{landlord}','LandlordController@destroy');

Route::group(['prefix'=>'landlords'], function(){
    Route::apiResource('/{landlord}/apartments', 'ApartmentController');
    Route::get('/{landlord}/apartments', 'ApartmentController@index');
    Route::get('/{landlord}/apartments/{apartment}', 'ApartmentController@show');
    Route::put('/{landlord}/apartments/{apartment}', 'ApartmentController@update');
    Route::post('/{landlord}/apartments', 'ApartmentController@store');
    Route::delete('/{landlord}/apartments/{apartment}','ApartmentController@destroy');

    Route::group(['prefix'=>'apartments'], function(){
        Route::apiResource('{apartment}/units', 'UnitController');
        Route::get('/{apartment}/units', 'UnitController@index');
        Route::get('/{apartment}/units/{unit}', 'UnitController@show');
        Route::put('/{apartment}/units/{unit}', 'UnitController@update');
        Route::post('/{apartment}/units', 'UnitController@store');
        Route::delete('/{apartment}/units/{unit}','UnitController@destroy');

        Route::group(['prefix'=>'units'], function(){
            Route::apiResource('{unit}/tenants', 'TenantController');
            Route::get('/{unit}/tenants', 'TenantController@index');
            Route::get('/{unit}/tenants/{tenant}', 'TenantController@show');
            Route::put('/{unit}/tenants/{tenant}', 'TenantController@update');
            Route::post('/{unit}/tenants', 'TenantController@store');
            Route::delete('/{unit}/tenants/{tenant}','TenantController@destroy');
        });
    });
});

Route::apiResource('/payments', 'PaymentController');
Route::get('/payments', 'PaymentController@index');
Route::get('/payments/{payment}', 'PaymentController@show');
Route::put('/payments/{payment}', 'PaymentController@update');
Route::post('/payments', 'PaymentController@store');
Route::delete('/payments/{payment}','PaymentController@destroy');


Route::apiResource('/leases', 'LeaseController');
Route::get('/leases', 'LeaseController@index');
Route::get('/leases/{lease}', 'LeaseController@show');
Route::put('/leases/{lease}', 'LeaseController@update');
Route::post('/leases', 'LeaseController@store');
Route::delete('/leases/{lease}','LeaseController@destroy');
