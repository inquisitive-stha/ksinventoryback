<?php

namespace Modules\Brand\Actions;

use App\Models\Brand;
use Modules\Brand\Resource\BrandV1Resource;

class BrandIndexAction
{
    public function execute($data)
    {
        $brands = Brand::paginate(2);
        return [
            'brands' => BrandV1Resource::collection($brands),
            'meta' => [
                'total' => $brands->total(),
                'currentPage' => $brands->currentPage(),
                'perPage' => $brands->perPage(),
                'lastPage' => $brands->lastPage(),
            ]
        ];
    }
}
