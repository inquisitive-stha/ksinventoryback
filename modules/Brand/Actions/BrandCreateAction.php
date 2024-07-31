<?php

namespace Modules\Brand\Actions;

use App\Models\Brand;
use Illuminate\Support\Str;
use Modules\Brand\DTO\CreateBrandActionDTO;

class BrandCreateAction
{
    public function execute(CreateBrandActionDTO $actionDTO)
    {
        return Brand::create([
            'name' => $actionDTO->name,
            'slug' => Str::slug($actionDTO->name)
        ]);
    }
}
