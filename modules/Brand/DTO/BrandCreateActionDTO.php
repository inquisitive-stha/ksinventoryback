<?php

namespace Modules\Brand\DTO;

use App\Actions\BaseActionDTO;
use Illuminate\Support\Str;

class BrandCreateActionDTO extends BaseActionDTO
{
    public string $name;
    public string $slug;
    public string $created_at;
    public string $updated_at;

    public function __construct(array $data)
    {
        $this->validateFields(
            ['name'],
            $data
        );

        $this->name = $data['name'];
        $this->slug = Str::slug($data['name']);
        $this->created_at = now();
        $this->updated_at = now();
    }

}
