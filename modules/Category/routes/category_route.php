<?php

use Illuminate\Support\Facades\Route;
use Modules\Warehouse\Http\Controllers\V1\CategoryController;

Route::group(['prefix' => 'api', 'as' => 'api.'], function () {

    Route::group(['prefix' => 'v1', 'as' => 'v1.'], function () {

        Route::resource('categories', CategoryController::class);

    });

});
