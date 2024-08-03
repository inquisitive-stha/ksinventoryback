<?php

namespace Modules\Warehouse\DTO;

use App\Actions\BaseActionDTO;
use Illuminate\Support\Str;

class WarehouseCreateActionDTO extends BaseActionDTO
{
    public string $name;
    public string $slug;
    public string $address;
    public string $phone;
    public string $email;
    public string $created_at;
    public string $updated_at;

    public function __construct(array $data)
    {
        $this->validateFields(
            ['name', 'address', 'phone', 'email'],
            $data
        );

        $this->name = $data['name'];
        $this->slug = Str::slug($data['name']);
        $this->address = $data['address'];
        $this->phone = $data['phone'];
        $this->email = $data['email'];
        $this->created_at = now();
        $this->updated_at = now();
    }

}
