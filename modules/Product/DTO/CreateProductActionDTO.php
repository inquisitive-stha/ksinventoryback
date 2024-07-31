<?php

namespace Modules\Product\DTO;

class CreateProductActionDTO
{
    public string $title;
    public string $description;
    public int $sku;
    public int $category_id;
    public ?int $brand_id;

    public function __construct($data)
    {
        $this->title = $data['title'];
        $this->description = $data['description'];
        $this->sku = $data['sku'];
        $this->category_id = $data['category_id'];
        $this->brand_id = $data['brand_id'] ?? null;

    }

}
