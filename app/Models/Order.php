<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; 

class Order extends Model
{
    use HasFactory;

    public $table = "orders";

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id');
        //Or: return $this->belongsTo(Profile::class, 'foreign_key');
    }
}
