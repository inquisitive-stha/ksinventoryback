<?php

namespace Modules\Product\Http\Resource\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Brand\Http\Resource\BrandResource;
use Modules\Category\Http\Resource\CategoryResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $respArr = [
            'type'       => 'product',
            'id'         => $this->id,
            'attributes' => [
                'title'       => $this->title,
                'description' => $this->description,
                'sku'         => $this->sku,
                'created_at'  => $this->created_at,
                'updated_at'  => $this->updated_at,
            ],
            'relationships' => [
                'brand' => [
                    'data' => [
                        'type' => 'brand',
                        'id' => $this->brand_id
                    ],
                    'links' => [
                        'self' => route('api.v1.brands.show', ['brand' => $this->brand_id])
                    ]
                ],
                'category' => [
                    'data' => [
                        'type' => 'category',
                        'id' => $this->category_id
                    ],
                    'links' => [
                        'self' => route('api.v1.categories.show', ['category' => $this->category_id])
                    ]
                ]
            ],
            'links'      => [
                'self' => route('api.v1.products.show', ['product' => $this->id]),
            ],
        ];
        if($request->has('include')){
            $respArr['includes'] = [
                new BrandResource($this->whenLoaded('brand')),
                new CategoryResource($this->whenLoaded('category'))
            ];
        }
        return $respArr;
    }
}
