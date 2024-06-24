<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'booking_code',
        'user_id',
        'status',
        'read'
    ];

    public function bookingname()
    {
        return $this->belongsTo('App\Models\Booking','booking_code','code');
    }
}
