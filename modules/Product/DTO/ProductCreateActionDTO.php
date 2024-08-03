<?php

namespace Modules\Product\DTO;

use App\Actions\BaseActionDTO;

class ProductCreateActionDTO extends BaseActionDTO
{
    public string $title;
    public ?string $description;
    public string $sku;
    public int $brand_id;
    public int $category_id;
    public string $created_at;
    public string $updated_at;

    public function __construct(array $data)
    {
        $this->validateFields(
            ['title', 'sku', 'brand_id', 'category_id'],
            $data
        );

        $this->title = $data['title'];
        $this->description = $data['description'] ?? null;
        $this->sku = $data['sku'];
        $this->brand_id = $data['brand_id'];
        $this->category_id = $data['category_id'];
        $this->created_at = now();
        $this->updated_at = now();
    }

}
