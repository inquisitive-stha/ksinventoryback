<?php

namespace Modules\Product\Actions;

use App\Models\Product;

class ProductDeleteAction
{
    public function execute($id)
    {
        
        $product = Product::findOrFail($id);
        
        $product->delete();

        return $product; 
    }
}
