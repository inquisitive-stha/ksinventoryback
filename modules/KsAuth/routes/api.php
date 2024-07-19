<?php

use Illuminate\Support\Facades\Route;
use Modules\KsAuth\Http\Controllers\KsAuthController;

Route::group(['prefix' => 'api', 'as' => 'api.'], function () {

//    Route::group(['prefix' => 'v1', 'as' => 'v1.'], function () {

        Route::post('login', [KsAuthController::class, 'login'])->name('login');

//    });

    Route::post('logout', [KsAuthController::class, 'logout'])->name('logout')->middleware('auth:sanctum');

});

