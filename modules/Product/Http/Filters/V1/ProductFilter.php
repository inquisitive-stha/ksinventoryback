<?php

namespace Modules\Product\Http\Filters\V1;

use App\Http\Filters\V1\QueryFilter;

class ProductFilter extends QueryFilter
{

    protected $sortable = [
        'title',
        'description',
        'sku',
        'brand_id',
        'category_id',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];

    public function title($value)
    {
        $likeStr = str_replace('*', '%', $value);
        return $this->builder->where('title', 'like', $likeStr);
    }

    public function description($value)
    {
        $likeStr = str_replace('*', '%', $value);
        return $this->builder->where('description', 'like', $likeStr);
    }

    public function sku($value)
    {
        $likeStr = str_replace('*', '%', $value);
        return $this->builder->where('sku', 'like', $likeStr);
    }

    public function brand_id($value)
    {
        $likeStr = str_replace('*', '%', $value);
        return $this->builder->where('brand_id', 'like', $likeStr);
    }

    public function category_id($value)
    {
        $likeStr = str_replace('*', '%', $value);
        return $this->builder->where('category_id', 'like', $likeStr);
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
