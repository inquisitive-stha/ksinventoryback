<?php

namespace Modules\Customer\Actions;

use App\Models\Customer;
use Modules\Customer\DTO\CreateCustomerActionDTO;

class CustomerCreateAction
{
    public function execute(CreateCustomerActionDTO $dto)
    {
        return Customer::create([
            'name' => $dto->name,
            'email' => $dto->email,
            'phone_number' => $dto->phone_number,
            'address' => $dto->address,
        ]);
    }
}
