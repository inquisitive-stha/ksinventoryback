<?php

namespace Modules\Product\Actions;

use Modules\Product\DTO\ProductCreateActionDTO;
use Modules\Product\Models\Product;

class ProductCreateAction
{
    public function execute(ProductCreateActionDTO $dto)
    {
        return Product::query()->create(collect($dto)->toArray());
    }
}
