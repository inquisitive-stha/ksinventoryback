<?php

namespace Modules\Brand\DTO;

class CreateBrandActionDTO
{
    public string $name;

    public function __construct($data)
    {
        $this->name = $data['name'];
    }

}
