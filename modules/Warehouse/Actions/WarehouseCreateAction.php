<?php

namespace Modules\Warehouse\Actions;

use Modules\Warehouse\DTO\WarehouseCreateActionDTO;
use Modules\Warehouse\Models\Warehouse;

class WarehouseCreateAction
{
    public function execute(WarehouseCreateActionDTO $dto)
    {
        return Warehouse::create(collect($dto)->toArray());
    }
}
