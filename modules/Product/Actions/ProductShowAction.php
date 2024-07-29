<?php

namespace Modules\Product\Actions;

use App\Models\Product;

class ProductShowAction
{
    public function execute($id)
    {
       return Product::findOrFail($id);
    }
}
