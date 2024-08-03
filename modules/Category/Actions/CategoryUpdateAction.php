<?php

namespace Modules\Category\Actions;

use Illuminate\Support\Str;
use Modules\Category\DTO\CategoryUpdateActionDTO;
use Modules\Category\Models\Category;

class CategoryUpdateAction
{
    public function execute(CategoryUpdateActionDTO $dto, Category|int $category)
    {
        if(!$category instanceof Category) {
            $category = Category::query()->findOrFail($category);
        }
        $category->update(collect($dto)->toArray());
        return $category;
    }
}
