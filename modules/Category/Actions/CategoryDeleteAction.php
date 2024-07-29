<?php

namespace Modules\Category\Actions;

use App\Models\Category;

class CategoryDeleteAction
{
    public function execute($id)
    {
        return Category::where('id',$id)->delete();
    }
}
