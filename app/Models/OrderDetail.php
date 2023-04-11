<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; 

class OrderDetail extends Model
{
    use HasFactory;

    public $table = "order_details";

    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'products_id');
        //Or: return $this->belongsTo(Profile::class, 'foreign_key');
    }
}
