<?php

namespace Modules\Supplier\Actions;

use App\Models\Supplier;

class SupplierDeleteAction
{
    public function execute($id)
    {
        return Supplier::where('id',$id)->delete();
    }
}
