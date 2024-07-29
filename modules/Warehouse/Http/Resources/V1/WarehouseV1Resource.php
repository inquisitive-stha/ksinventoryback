<?php

namespace Modules\Warehouse\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WarehouseV1Resource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'type'        => 'warehouse',
            'id'          => $this->id,
            'attributes' => [
                'name' => $this->name,
                'slug' => $this->slug,
                'address' => $this->address,
                'phone' => $this->phone,
                'email' => $this->email,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ],
            'links' => [
                'self' => route('api.v1.warehouses.show', ['warehouse' => $this->id]),
            ],
        ];
    }
}
