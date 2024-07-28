<?php

namespace Modules\DTO;

class CreateCategoryActionDTO
{
    public string $title;

    public function __construct($data)
    {
        $this->title = $data['title'];
    }

}
