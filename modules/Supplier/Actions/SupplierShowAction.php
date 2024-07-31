<?php

namespace Modules\Supplier\Actions;

use App\Models\Supplier;

class SupplierShowAction
{
    public function execute($id)
    {
       return Supplier::findOrFail($id);
    }
}
