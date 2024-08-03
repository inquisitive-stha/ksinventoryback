<?php

namespace Modules\Product\DTO;

use App\Actions\BaseActionDTO;
class ProductUpdateActionDTO extends BaseActionDTO
{
    public ?string $title;
    public ?string $description;
    public ?string $sku;
    public ?string $brand_id;
    public ?string $category_id;
    public string $updated_at;

    public function __construct(array $data)
    {
        if (isset($data['title'])) {
            $this->title = $data['title'];
        }

        if (isset($data['description'])) {
            $this->description = $data['description'];
        }

        if (isset($data['sku'])) {
            $this->sku = $data['sku'];
        }

        if (isset($data['brand_id'])) {
            $this->brand_id = $data['brand_id'];
        }

        if (isset($data['category_id'])) {
            $this->category_id = $data['category_id'];
        }

        $this->updated_at = now();
    }

}
