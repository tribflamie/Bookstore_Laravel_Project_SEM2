<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reply extends Model
{

    use HasFactory;

    public $table = "replies";

    protected $fillable = [
        'user_id', 'feedbacks_id', 'description'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id');
        //Or: return $this->belongsTo(Profile::class, 'foreign_key');
    }

    /**
     * The has Many Relationship
     *
     * @var array
     */
    public function feedbacks(): BelongsTo
    {
        return $this->belongsTo(Feedback::class, 'feedbacks_id');
    }
}
