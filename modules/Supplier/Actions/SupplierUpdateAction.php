<?php

namespace Modules\Supplier\Actions;

use App\Models\Supplier;
use Illuminate\Support\Str;

class SupplierUpdateAction
{
    public function execute($id, $data)
    {
        $category = Supplier::findOrFail($id);
        $category->name = $data['name'];
        $category->name = $data['email'];
        $category->name = $data['phone'];
        $category->name = $data['address'];
        $category->name = $data['balance'];

        $category->updated_at = now();
        $category->save();
        return $category;
    }
}
