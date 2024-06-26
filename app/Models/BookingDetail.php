<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'booking_code',
        'room_id',
        'room',
        'price',
        'note',
    ];

    public function bookingname()
    {
        return $this->belongsTo('App\Models\Booking','booking_code','code');
    }

    public function roomname()
    {
        return $this->belongsTo('App\Models\Room','room_id','id');
    }
}
