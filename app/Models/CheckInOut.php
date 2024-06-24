<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckInOut extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'code',
        'checin',
        'checkout',
        'hotel_id',
        'room_id',
        'from',
        'user_id',
        'name',
        'phone',
        'count',
        'total',
        'pay_type',
        'img',
        'status',
        'approve_id',
    ];

    public function hotelname()
    {
        return $this->belongsTo('App\Models\Hotel','hotel_id','id');
    }

    public function roomname()
    {
        return $this->belongsTo('App\Models\Room','room_id','id');
    }

    public function username()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
