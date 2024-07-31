<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public $fillable = ['name', 'slug'];

    protected $guarded = ['id'];

    protected $tableName = 'brands';
    public function product(){
        return $this->hasMany(Product::class);
    }
}
