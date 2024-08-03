<?php

use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Support\Facades\Route;
use Modules\Brand\Http\Controllers\V1\BrandController;

Route::group(['prefix' => 'api', 'as' => 'api.', 'middleware' => ['auth:sanctum', SubstituteBindings::class]], function () {

    Route::group(['prefix' => 'v1', 'as' => 'v1.'], function () {

        Route::apiResource('brands', BrandController::class);

    });

});
