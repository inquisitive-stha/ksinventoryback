<?php

namespace Modules\Customer\Actions;

use App\Models\Customer;

class CustomerShowAction
{
    public function execute($id)
    {
        return Customer::findOrFail($id);
    }
}
