<?php

namespace Modules\Supplier\Providers;

use Illuminate\Support\ServiceProvider;

class SupplierServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        dd('hit');
    }
}
