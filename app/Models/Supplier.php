<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'suppliers';

    protected $guarded=['id'];

    // Define the attributes that are mass assignable
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'balance',
    ];

    // Define the attributes that should be cast to native types
    protected $casts = [
        'balance' => 'float',
    ];
}
