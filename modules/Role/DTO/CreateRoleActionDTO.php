<?php

namespace Modules\Role\DTO;

class CreateRoleActionDTO
{
    public string $name;
    public ?string $description;


    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->description = $data['description'] ?? null;
    }

    
    

}
