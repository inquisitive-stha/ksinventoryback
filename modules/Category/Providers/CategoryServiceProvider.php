<?php

namespace Modules\Category\Providers;

use Carbon\Laravel\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    public function register()
    {

    }
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/../routes/category_route.php');
    }
}
