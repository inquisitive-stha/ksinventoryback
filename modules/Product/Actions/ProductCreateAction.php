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
            'slug' => Str::slug($actionDTO->title)
        ]);
    }
}
