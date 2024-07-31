<?php

namespace Modules\Brand\Actions;

use App\Models\Brand;

class BrandDeleteAction
{
    public function execute($id)
    {
        return Brand::where('id',$id)->delete();
    }
}
