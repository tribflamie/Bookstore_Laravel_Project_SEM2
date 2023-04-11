<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'categories_id', 'name', 'author', 'country', 'published', 'price', 'discount', 'photo', 'description'
    ];

    /**
     * The has Many Relationship
     *
     * @var array
     */
    public function feedbacks(): HasMany
    {
        return $this->hasMany(Feedback::class, 'products_id');
    }

    public function categories(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'categories_id');
        //Or: return $this->belongsTo(Profile::class, 'foreign_key');
    }
}
