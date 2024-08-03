<?php

namespace Modules\Category\DTO;

use App\Actions\BaseActionDTO;
use Illuminate\Support\Str;

class CategoryCreateActionDTO extends BaseActionDTO
{
    public string $title;
    public string $slug;
    public string $created_at;
    public string $updated_at;

    public function __construct(array $data)
    {
        $this->validateFields(
            ['title'],
            $data
        );

        $this->title = $data['title'];
        $this->slug = Str::slug($data['title']);
        $this->created_at = now();
        $this->updated_at = now();
    }

}
