<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'api', 'as' => 'api.'], function () {

    Route::group(['prefix' => 'v1', 'as' => 'v1.'], function () {

        Route::apiResource('warehouses', \Modules\Warehouse\Http\Controllers\V1\WarehouseV1Controller::class);

    });

});
