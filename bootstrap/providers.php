<?php

return [
    App\Providers\AppServiceProvider::class,
    \Modules\KsAuth\Providers\KsAuthServiceProviders::class,
    \Modules\Warehouse\Providers\WarehouseServiceProvider::class,
    \Modules\Category\Providers\CategoryServiceProvider::class,
    \Modules\Supplier\Providers\SupplierServiceProvider::class,
];
