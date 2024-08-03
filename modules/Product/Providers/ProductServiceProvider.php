<?php

namespace Modules\Product\Providers;

use Carbon\Laravel\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    public function register()
    {

    }
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/../routes/product_route.php');
    }
}
