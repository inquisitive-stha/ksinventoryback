<?php

namespace Modules\Warehouse\Http\Controllers\V1;

use App\Http\Controllers\Api\V1\BaseApiController;
use Illuminate\Http\Request;
use Modules\Warehouse\Http\Filters\V1\WarehouseV1Filter;
use Modules\Warehouse\Http\Resources\V1\WarehouseV1Resource;
use Modules\Warehouse\Models\Warehouse;

class WarehouseV1Controller extends BaseApiController
{
    public function index(WarehouseV1Filter $filters)
    {
        return WarehouseV1Resource::collection(Warehouse::filter($filters)->paginate());
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
        return new WarehouseV1Resource(Warehouse::find($id));
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
