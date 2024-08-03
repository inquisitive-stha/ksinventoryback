<?php

namespace Modules\Product\Actions;

use Modules\Product\DTO\ProductUpdateActionDTO;
use Modules\Product\Models\Product;

class ProductUpdateAction
{
    public function execute(ProductUpdateActionDTO $dto, Product|int $product)
    {
        if(!$product instanceof Product) {
            $product = Product::query()->findOrFail($product);
        }
        $product->update(collect($dto)->toArray());
        return $product;
    }
}
