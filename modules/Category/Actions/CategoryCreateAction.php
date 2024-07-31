<?php

namespace Modules\Category\Actions;

use App\Models\Category;
use Illuminate\Support\Str;
use Modules\Category\DTO\CreateCustomerActionDTO;

class CategoryCreateAction
{
    public function execute(CreateCustomerActionDTO $actionDTO)
    {
        return Category::create([
            'title' => $actionDTO->title,
            'slug' => Str::slug($actionDTO->title)
        ]);
    }
}
