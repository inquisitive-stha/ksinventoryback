<?php

namespace Modules\Warehouse\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Warehouse\Http\Resources\WarehouseResource;
use Modules\Warehouse\Models\Warehouse;

class WarehouseV1Controller extends Controller
{
    public function index()
    {
        return WarehouseResource::collection(Warehouse::paginate(10));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
        return new WarehouseResource(Warehouse::find($id));
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
