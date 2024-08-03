<?php

namespace Modules\Brand\DTO;

use App\Actions\BaseActionDTO;
use Illuminate\Support\Str;

class BrandUpdateActionDTO extends BaseActionDTO
{
    public ?string $name;
    public ?string $slug;
    public string $updated_at;

    public function __construct(array $data)
    {
        if (isset($data['name'])) {
            $this->name = $data['name'];
            $this->slug = Str::slug($data['name']);
        }
        $this->updated_at = now();
    }

}
