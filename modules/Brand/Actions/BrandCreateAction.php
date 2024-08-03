<?php

namespace Modules\Brand\Actions;

use Modules\Brand\DTO\BrandCreateActionDTO;
use Modules\Brand\Models\Brand;

class BrandCreateAction
{
    public function execute(BrandCreateActionDTO $dto)
    {
        return Brand::query()->create(collect($dto)->toArray());
    }
}
