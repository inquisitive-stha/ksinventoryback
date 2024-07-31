<?php

namespace Modules\Product\Actions;

use App\Models\Product;
use Modules\Product\DTO\CreateProductActionDTO;

class ProductUpdateAction
{
    public function execute($id, CreateProductActionDTO $actionDTO)
    {
        
        $product = Product::findOrFail($id);

        $product->update([
            'title' => $actionDTO->title,
            'description' => $actionDTO->description,
            'sku' => $actionDTO->sku,
            'category_id' => $actionDTO->category_id,
            'brand_id' => $actionDTO->brand_id,
        ]);

        return $product;
    }
}
