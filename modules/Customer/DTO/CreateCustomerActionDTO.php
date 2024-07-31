<?php

namespace Modules\Customer\DTO;

class CreateCustomerActionDTO
{
    public string $name;
    public string $email;
    public ?string $phone_number;
    public string $address;

    public function __construct(array $data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->phone_number = $data['phone_number'] ?? null;
        $this->address = $data['address'];
    }
}
