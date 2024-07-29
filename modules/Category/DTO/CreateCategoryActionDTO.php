<?php

namespace Modules\Category\DTO;

class CreateCategoryActionDTO
{
    public string $title;

    public function __construct($data)
    {
        $this->title = $data['title'];
    }

}
