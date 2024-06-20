<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'code',
        'checin',
        'checkout',
        'name',
        'phone',
        'pay_type',
        'total',
        'img',
        'status',
        'approve_id',
    ];
}
