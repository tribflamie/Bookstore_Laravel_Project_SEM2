<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    /**
     * The has Many Relationship
     *
     * @var array
     */
    public function feedbacks(): HasMany
    {
        return $this->hasMany(Feedback::class, 'products_id');
    }
}
