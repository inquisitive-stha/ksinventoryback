<?php

namespace Modules\Product\Actions;

use App\Models\Product;
use Illuminate\Support\Str;

class ProductUpdateAction
{
    public function execute($id, $data)
    {
        $product = Product::findOrFail($id);
        $product->title = $data['title'];
        $product->slug = Str::slug($data['title']);
        $product->updated_at = now();
        $product->save();
        return $product;
    }
}
