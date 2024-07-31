<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'api', 'as' => 'api.'], function () {
    Route::group(['prefix' => 'v1', 'as' => 'v1.'], function () {
        Route::resource('customers', \Modules\Customer\Http\Controllers\V1\CustomerV1Controller::class);
    });
});
