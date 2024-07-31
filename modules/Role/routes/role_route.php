<?php

use Illuminate\Support\Facades\Route;
use Modules\Role\Http\Controllers\V1\RoleV1Controller;

Route::group(['prefix' => 'api', 'as' => 'api.'], function () {

    Route::group(['prefix' => 'v1', 'as' => 'v1.'], function () {

        Route::resource('roles', RoleV1Controller::class);

    });

});
