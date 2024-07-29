<?php

use Illuminate\Support\Facades\Route;
use Modules\Category\Http\Controllers\V1\CategoryV1Controller;

Route::group(['prefix' => 'api', 'as' => 'api.'], function () {

    Route::group(['prefix' => 'v1', 'as' => 'v1.'], function () {

        Route::resource('categories', CategoryV1Controller::class);

    });

});
