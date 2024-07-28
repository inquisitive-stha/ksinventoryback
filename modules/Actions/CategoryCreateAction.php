<?php

namespace Modules\Actions;

use App\Models\Category;
use Illuminate\Support\Str;
use Modules\DTO\CreateCategoryActionDTO;

class CategoryCreateAction
{
    public function execute(CreateCategoryActionDTO $actionDTO)
    {
        return Category::create([
            'title' => $actionDTO->title,
            'slug' => Str::slug($actionDTO->title)
        ]);
    }
}
