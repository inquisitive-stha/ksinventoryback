<?php

namespace Modules\Warehouse\DTO;

use App\Actions\BaseActionDTO;
use Illuminate\Support\Str;

class WarehouseUpdateActionDTO extends BaseActionDTO
{
    public ?string $name;
    public ?string $slug;
    public ?string $address;
    public ?string $phone;
    public ?string $email;
    public string $updated_at;

    public function __construct(array $data)
    {
        if (isset($data['name'])) {
            $this->name = $data['name'];
            $this->slug = Str::slug($data['name']);
        }

        if (isset($data['address'])) {
            $this->address = $data['address'];
        }

        if (isset($data['phone'])) {
            $this->phone = $data['phone'];
        }

        if (isset($data['email'])) {
            $this->email = $data['email'];
        }

        $this->updated_at = now();
    }

}
