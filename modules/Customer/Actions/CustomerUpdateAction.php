<?php

namespace Modules\Customer\Actions;

use App\Models\Customer;
use Illuminate\Support\Str;
use Modules\Customer\DTO\CreateCustomerActionDTO;

class CustomerUpdateAction
{
    public function execute($id, CreateCustomerActionDTO $dto)
    {
        $customer = Customer::findOrFail($id);
        $customer->name = $dto->name;
        $customer->email = $dto->email;
        $customer->phone_number = $dto->phone_number;
        $customer->address = $dto->address;
        $customer->updated_at = now();
        $customer->save();
        return $customer;
    }
}
