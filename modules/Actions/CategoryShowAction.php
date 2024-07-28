<?php

namespace Modules\Actions;

use App\Models\Category;

class CategoryShowAction
{
    public function execute($id)
    {
       return Category::findOrFail($id);
    }
}
