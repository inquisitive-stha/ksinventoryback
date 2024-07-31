<?php

namespace Modules\Role\Providers;

use Carbon\Laravel\ServiceProvider;

class RoleServiceProvider extends ServiceProvider
{
    public function register()
    {

    }
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/role_route.php');
    }
}
