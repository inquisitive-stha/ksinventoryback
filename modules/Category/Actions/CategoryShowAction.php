<?php

namespace Modules\Category\Actions;

use App\Models\Category;

class CategoryShowAction
{
    public function execute($id)
    {
       return Category::findOrFail($id);
    }
}
