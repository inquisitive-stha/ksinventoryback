<?php

namespace Modules\Customer\Actions;

use App\Models\Customer;
use Modules\Customer\Resource\CustomerV1Resource;

class CustomerIndexAction
{
    public function execute($data)
    {
        $customers = Customer::paginate(2);
        return [
            'customer' => CustomerV1Resource::collection($customers),
            'meta' => [
                'total' => $customers->total(),
                'currentPage' => $customers->currentPage(),
                'perPage' => $customers->perPage(),
                'lastPage' => $customers->lastPage(),
            ]
        ];
    }
}
