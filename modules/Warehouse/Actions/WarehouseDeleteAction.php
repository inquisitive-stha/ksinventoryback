<?php

namespace Modules\Warehouse\Actions;

use Modules\Warehouse\DTO\WarehouseCreateActionDTO;
use Modules\Warehouse\DTO\WarehouseUpdateActionDTO;
use Modules\Warehouse\Models\Warehouse;

class WarehouseDeleteAction
{
    public function execute(Warehouse|int $warehouse)
    {
        if(!$warehouse instanceof Warehouse) {
            $warehouse = Warehouse::find($warehouse);
        }
        $warehouse->delete();
    }
}
