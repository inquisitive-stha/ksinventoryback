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
        $this->loadRoutesFrom(__DIR__.'/../routes/brand_route.php');
    }
}
