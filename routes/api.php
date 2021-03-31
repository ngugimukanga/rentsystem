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
//Route::prefix('v1')->group(function (){
    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });
    Route::apiResource('/landlords', 'LandlordController');

    Route::group(['prefix'=>'landlords'], function(){
        Route::apiResource('/{landlord}/apartments', 'ApartmentController');
        Route::get('/{landlord}/apartments', 'ApartmentController@index')->name('landlord.apartments');

        Route::group(['prefix'=>'apartments'], function(){
            Route::apiResource('{apartment}/units', 'UnitController');
            Route::get('/{apartment}/units', 'UnitController@index')->name('apartment.units');
            Route::get('/{apartment}/tenants', 'TenantController@index')->name('apartment.tenants');;

            Route::group(['prefix'=>'units'], function(){
                Route::apiResource('{unit}/tenants', 'TenantController');
                Route::apiResource('{unit}/leases', 'LeaseController');

                Route::get('/{unit}/tenants', 'TenantController@show')->name('unit.tenant');

            });
        });
    });
    Route::apiResource('/payments', 'PaymentController');
//});

