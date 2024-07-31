<?php

namespace Modules\Customer\Actions;

use App\Models\Customer;

class CustomerDeleteAction
{
    public function execute($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
    }
}
