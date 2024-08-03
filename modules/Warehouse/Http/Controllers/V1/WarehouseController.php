<?php

namespace Modules\Warehouse\Http\Controllers\V1;

use App\Http\Controllers\Api\V1\BaseApiController;
use App\Traits\ApiResponses;
use Modules\Warehouse\Actions\WarehouseCreateAction;
use Modules\Warehouse\Actions\WarehouseDeleteAction;
use Modules\Warehouse\Actions\WarehouseUpdateAction;
use Modules\Warehouse\DTO\WarehouseCreateActionDTO;
use Modules\Warehouse\DTO\WarehouseUpdateActionDTO;
use Modules\Warehouse\Http\Filters\V1\WarehouseFilter;
use Modules\Warehouse\Http\Requests\V1\WarehouseStoreRequest;
use Modules\Warehouse\Http\Requests\V1\WarehouseUpdateRequest;
use Modules\Warehouse\Http\Resources\V1\WarehouseResource;
use Modules\Warehouse\Models\Warehouse;

class WarehouseController extends BaseApiController
{
    use ApiResponses;
    public function index(WarehouseFilter $filters)
    {
        return WarehouseResource::collection(Warehouse::filter($filters)->paginate());
    }

    public function store(WarehouseStoreRequest $request)
    {
        return new WarehouseResource(
            app(WarehouseCreateAction::class)->execute(
                new WarehouseCreateActionDTO($request->mappedAttributes())
            )
        );
    }

    public function show(Warehouse $warehouse)
    {
        return new WarehouseResource($warehouse);
    }

    public function update(WarehouseUpdateRequest $request, Warehouse $warehouse)
    {
        return new WarehouseResource(
            app(WarehouseUpdateAction::class)->execute(
                new WarehouseUpdateActionDTO($request->mappedAttributes()),
                $warehouse
            )
        );
    }

    public function destroy(Warehouse $warehouse)
    {
        app(WarehouseDeleteAction::class)->execute($warehouse);
        return $this->ok('Warehouse successfully deleted');
    }
}
