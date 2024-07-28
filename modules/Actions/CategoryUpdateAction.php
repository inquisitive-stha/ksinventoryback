<?php

namespace Modules\Actions;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryUpdateAction
{
    public function execute($id, $data)
    {
        $category = Category::findOrFail($id);
        $category->title = $data['title'];
        $category->slug = Str::slug($data['title']);
        $category->updated_at = now();
        $category->save();
        return $category;
    }
}
