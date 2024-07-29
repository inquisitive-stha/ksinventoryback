<?php

namespace Modules\Category\Actions;

use App\Models\Category;
use Modules\Category\Resource\CategoryV1Resource;

class CategoryIndexAction
{
    public function execute($data)
    {
        $categories = Category::paginate(2);
        return [
            'categories' => CategoryV1Resource::collection($categories),
            'meta' => [
                'total' => $categories->total(),
                'currentPage' => $categories->currentPage(),
                'perPage' => $categories->perPage(),
                'lastPage' => $categories->lastPage(),
            ]
        ];
    }
}
