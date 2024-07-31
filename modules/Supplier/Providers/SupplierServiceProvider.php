<?php
namespace Modules\Supplier\Providers;

use Carbon\Laravel\ServiceProvider;


class SupplierServiceProvider extends ServiceProvider
{
    public function register()
    {

    }
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/supplier_route.php');
    }
}
