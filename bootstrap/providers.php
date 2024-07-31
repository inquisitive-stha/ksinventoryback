<?php

return [
    App\Providers\AppServiceProvider::class,
    \Modules\KsAuth\Providers\KsAuthServiceProviders::class,
    \Modules\Warehouse\Providers\WarehouseServiceProvider::class,
    \Modules\Category\Providers\CategoryServiceProvider::class,
    \Modules\Product\Providers\ProductServiceProvider::class,
    \Modules\Brand\Providers\BrandServiceProvider::class,
];
