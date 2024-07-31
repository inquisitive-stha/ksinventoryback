<?php

namespace Modules\Supplier\DTO;

class CreateSupplierActionDTO
{
    public string $name;
    public string $email;
    public string $phone;
    public string $address;
    public float $balance;

    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->phone = $data['phone'];
        $this->address = $data['address'];
        $this->balance = $data['balance'];
    }

}
