<?php

namespace Modules\Brand\Actions;

use Modules\Brand\DTO\BrandUpdateActionDTO;
use Modules\Brand\Models\Brand;

class BrandUpdateAction
{
    public function execute(BrandUpdateActionDTO $dto, Brand|int $brand)
    {
        if(!$brand instanceof Brand) {
            $brand = Brand::query()->findOrFail($brand);
        }
        $brand->update(collect($dto)->toArray());
        return $brand;
    }
}
