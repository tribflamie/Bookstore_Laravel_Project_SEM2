<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'book', 'author','originalLanguage','country','genre', 'language','publishedDate','price','discount','photo','publishedDate','mediaType','description'
    ];
}
