<?php

namespace Modules\Supplier\Actions;

use App\Models\Supplier;

use Modules\Supplier\Http\Resource\SupplierV1Resource;

class SupplierIndexAction
{
    public function execute($data)
    {
        $suppliers = Supplier::paginate(2);
        return [
            'Suppliers' => SupplierV1Resource::collection($suppliers),
            'meta' => [
                'total' => $suppliers->total(),
                'currentPage' => $suppliers->currentPage(),
                'perPage' => $suppliers->perPage(),
                'lastPage' => $suppliers->lastPage(),
            ]
        ];
    }
}
