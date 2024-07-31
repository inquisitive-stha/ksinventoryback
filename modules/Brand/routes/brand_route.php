<?php

use Illuminate\Support\Facades\Route;
use Modules\Brand\Http\Controllers\V1\BrandV1Controller;

Route::group(['prefix' => 'api', 'as' => 'api.'], function () {

    Route::group(['prefix' => 'v1', 'as' => 'v1.'], function () {

        Route::resource('brand', BrandV1Controller::class);

    });

});
