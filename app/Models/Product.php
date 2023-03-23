<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'categories_id', 'name', 'author', 'country', 'published', 'sales', 'price', 'discount', 'photo', 'description', 'created_at', 'updated_at'
    ];
}
