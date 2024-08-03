<?php

namespace Modules\Category\Actions;

use Modules\Category\DTO\CategoryCreateActionDTO;
use Modules\Category\Models\Category;

class CategoryCreateAction
{
    public function execute(CategoryCreateActionDTO $dto)
    {
        return Category::query()->create(collect($dto)->toArray());
    }
}
