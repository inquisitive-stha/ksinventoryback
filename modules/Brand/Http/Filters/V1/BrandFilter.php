<?php

namespace Modules\Brand\Http\Filters\V1;

use App\Http\Filters\V1\QueryFilter;

class BrandFilter extends QueryFilter
{
    protected $sortable = [
        'name',
        'slug',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];

    public function include($value)
    {
        return $this->builder->with($value);
    }

    public function name($value)
    {
        $likeStr = str_replace('*', '%', $value);
        return $this->builder->where('name', 'like', $likeStr);
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
