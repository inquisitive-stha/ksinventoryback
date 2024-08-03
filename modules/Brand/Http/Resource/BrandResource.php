<?php

namespace Modules\Brand\Http\Resource;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BrandResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'type'        => 'brand',
            'id'          => $this->id,
            'attributes' => [
                'name' => $this->name,
                'slug' => $this->slug,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ],
            'links' => [
                'self' => route('api.v1.brands.show', ['brand' => $this->id]),
            ],
        ];
    }
}
