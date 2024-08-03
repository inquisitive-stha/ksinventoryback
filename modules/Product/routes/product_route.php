<?php

use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Support\Facades\Route;
use Modules\Product\Http\Controllers\V1\ProductController;

Route::group(['prefix' => 'api', 'as' => 'api.', 'middleware' => ['auth:sanctum', SubstituteBindings::class]], function () {

    Route::group(['prefix' => 'v1', 'as' => 'v1.'], function () {

        Route::apiResource('products', ProductController::class);

    });

});
