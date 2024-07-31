<?php

use Illuminate\Support\Facades\Route;
use Modules\Supplier\Http\Controllers\V1\SupplierV1Controller;

Route::group(['prefix' => 'api', 'as' => 'api.'], function () {

    Route::group(['prefix' => 'v1', 'as' => 'v1.'], function () {

        Route::resource('suppliers', SupplierV1Controller::class);

    });

});
