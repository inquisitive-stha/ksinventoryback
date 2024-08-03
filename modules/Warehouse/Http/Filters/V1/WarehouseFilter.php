<?php

namespace Modules\Warehouse\Http\Filters\V1;

use App\Http\Filters\V1\QueryFilter;

class WarehouseFilter extends QueryFilter
{

    protected $sortable = [
        'name',
        'slug',
        'address',
        'phone',
        'email',
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

    public function address($value)
    {
        $likeStr = str_replace('*', '%', $value);
        return $this->builder->where('address', 'like', $likeStr);
    }

    public function phone($value)
    {
        $likeStr = str_replace('*', '%', $value);
        return $this->builder->where('phone', 'like', $likeStr);
    }

    public function email($value)
    {
        $likeStr = str_replace('*', '%', $value);
        return $this->builder->where('phone', 'like', $likeStr);
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
