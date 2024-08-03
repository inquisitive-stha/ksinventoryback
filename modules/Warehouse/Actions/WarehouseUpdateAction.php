<?php

namespace Modules\Warehouse\Actions;

use Modules\Warehouse\DTO\WarehouseUpdateActionDTO;
use Modules\Warehouse\Models\Warehouse;

class WarehouseUpdateAction
{
    public function execute(WarehouseUpdateActionDTO $dto, Warehouse|int $warehouse)
    {
        if(!$warehouse instanceof Warehouse) {
            $warehouse = Warehouse::query()->findOrFail($warehouse);
        }
        $warehouse->update(collect($dto)->toArray());
        return $warehouse;
    }
}
