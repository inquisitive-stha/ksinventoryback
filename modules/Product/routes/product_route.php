<?php

use Illuminate\Support\Facades\Route;
use Modules\Product\Http\Controllers\V1\ProductV1Controller;

// Route::group(['prefix' => 'api/v1', 'as' => 'api.v1.'], function () {
//     Route::resource('products', ProductV1Controller::class);
// });


Route::group(['prefix' => 'api', 'as' => 'api.'], function () {

    Route::group(['prefix' => 'v1', 'as' => 'v1.'], function () {

        Route::resource('products', ProductV1Controller::class);

    });

});