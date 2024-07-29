<?php

namespace Modules\Product\Actions;

use App\Models\Product;
use Modules\Product\Resource\ProductV1Resource;

class ProductIndexAction
{
    public function execute($data)
    {
        $categories = Product::paginate(2);
        return [
            'categories' => ProductV1Resource::collection($categories),
            'meta' => [
                'total' => $categories->total(),
                'currentPage' => $categories->currentPage(),
                'perPage' => $categories->perPage(),
                'lastPage' => $categories->lastPage(),
            ]
        ];
    }
}
