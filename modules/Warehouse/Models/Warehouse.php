<?php

namespace Modules\Warehouse\Models;

use App\Http\Filters\V1\QueryV1Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'warehouses';

    protected $fillable = [
        'name',
        'slug',
        'address',
        'phone',
        'email',
    ];

    public function scopeFilter(Builder $builder, QueryV1Filter $filters): Builder
    {
        return $filters->apply($builder);
    }

}
