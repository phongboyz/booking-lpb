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
        'hotel_id',
        'checin',
        'checkout',
        'form',
        'name',
        'phone',
        'pay_type',
        'total',
        'img',
        'status',
        'user_id',
        'approve_id',
    ];

    public function hotelname()
    {
        return $this->belongsTo('App\Models\Hotel','hotel_id','id');
    }

}
