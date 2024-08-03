<?php

namespace Modules\Brand\Providers;

use Carbon\Laravel\ServiceProvider;

class BrandServiceProvider extends ServiceProvider
{
    public function register()
    {

    }
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/../routes/brand_route.php');
    }
}
