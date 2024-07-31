<?php

namespace Modules\Supplier\Actions;

use App\Models\Supplier;
// use Illuminate\Support\Str;
use Modules\Supplier\DTO\CreateSupplierActionDTO;

class SupplierCreateAction
{
    public function execute(CreateSupplierActionDTO $actionDTO)
    {
        return Supplier::create([
            'name' => $actionDTO->name,
            'email' => $actionDTO->email,
            'phone' => $actionDTO->phone,
            'address' => $actionDTO->address,
            'balance' => $actionDTO->balance,
        ]);
    }
}
