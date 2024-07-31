<?php

namespace Modules\Brand\Actions;

use App\Models\Brand;
use Illuminate\Support\Str;

class BrandUpdateAction
{
    public function execute($id, $data)
    {
        $brand = Brand::findOrFail($id);
        $brand->name = $data['name'];
        $brand->slug = Str::slug($data['name']);
        $brand->updated_at = now();
        $brand->save();
        return $brand;
    }
}
