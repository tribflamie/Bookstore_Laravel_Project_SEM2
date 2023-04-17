<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    public $table = 'coupons';

    protected $fillable = ['code', 'value', 'description', 'exp_date'];
}
