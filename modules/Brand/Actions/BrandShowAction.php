<?php

namespace Modules\Brand\Actions;

use App\Models\Brand;

class BrandShowAction
{
    public function execute($id)
    {
       return Brand::findOrFail($id);
    }
}
