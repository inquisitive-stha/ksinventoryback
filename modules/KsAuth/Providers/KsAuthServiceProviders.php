<?php

namespace Modules\KsAuth\Providers;

use Illuminate\Support\ServiceProvider;

class KsAuthServiceProviders extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
//        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
//        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'ksAuth');
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
//        $this->loadViewsFrom(__DIR__ . '/../views', 'ksAuth');

    }
}
