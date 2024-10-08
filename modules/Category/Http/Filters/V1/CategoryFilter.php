<?php

namespace Modules\Category\Http\Filters\V1;

use App\Http\Filters\V1\QueryFilter;

class CategoryFilter extends QueryFilter
{
    protected $sortable = [
        'title',
        'slug',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];

    public function title($value)
    {
        $likeStr = str_replace('*', '%', $value);
        return $this->builder->where('title', 'like', $likeStr);
    }

    public function slug($value)
    {
        $likeStr = str_replace('*', '%', $value);
        return $this->builder->where('slug', 'like', $likeStr);
    }

    public function created_at($value)
    {
        $dates = explode(',', $value);

        if (count($dates) > 1) {
            return $this->builder->whereBetween('created_at', $dates);
        }

        return $this->builder->whereDate('created_at', $value);
    }

    public function updated_at($value)
    {
        $dates = explode(',', $value);

        if (count($dates) > 1) {
            return $this->builder->whereBetween('updated_at', $dates);
        }

        return $this->builder->whereDate('updated_at', $value);
    }
}
