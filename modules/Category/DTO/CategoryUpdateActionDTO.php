<?php

namespace Modules\Category\DTO;

use App\Actions\BaseActionDTO;
use Illuminate\Support\Str;

class CategoryUpdateActionDTO extends BaseActionDTO
{
    public ?string $title;
    public ?string $slug;
    public string $updated_at;

    public function __construct(array $data)
    {
        if (isset($data['title'])) {
            $this->title = $data['title'];
            $this->slug = Str::slug($data['title']);
        }
        $this->updated_at = now();
    }

}
