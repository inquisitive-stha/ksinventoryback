<?php

namespace Modules\Product\DTO;

class CreateProductActionDTO
{
    public string $title;

    public function __construct($data)
    {
        $this->title = $data['title'];
    }

}
