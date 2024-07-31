<?php

namespace Modules\Product\Actions;

use App\Models\Product;
use Illuminate\Support\Str;
use Modules\Product\DTO\CreateProductActionDTO;

class ProductCreateAction
{
    public function execute(CreateProductActionDTO $actionDTO)
    {
        return Product::create([
            'title' => $actionDTO->title,
            'description' => $actionDTO->description,
            'sku' => $actionDTO->sku,
            'category_id' => $actionDTO->category_id,
            'brand_id' => $actionDTO->brand_id, 
        ]);
    }
}
