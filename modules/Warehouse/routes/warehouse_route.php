<?php

use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'api', 'as' => 'api.', 'middleware' => ['auth:sanctum', SubstituteBindings::class]], function () {

    Route::group(['prefix' => 'v1', 'as' => 'v1.'], function () {

        Route::apiResource('warehouses', \Modules\Warehouse\Http\Controllers\V1\WarehouseController::class);

    });

});
