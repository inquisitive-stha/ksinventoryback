<?php

namespace Modules\Product\Actions;

use App\Models\Product;

class ProductDeleteAction
{
    public function execute($id)
    {
        return Product::where('id',$id)->delete();
    }
}
