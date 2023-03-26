<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Feedback extends Model
{
    use HasFactory;

    public $table = "feedbacks";

    protected $fillable = [
        'user_id', 'products_id', 'rating', 'description'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id');
        //Or: return $this->belongsTo(Profile::class, 'foreign_key');
    }

    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
        //Or: return $this->belongsTo(Profile::class, 'foreign_key');
    }

    public function replies(): HasMany
    {
        //Eloquent One-To-One relationship
        return $this->hasMany(Reply::class, 'feedbacks_id');
    }
}
