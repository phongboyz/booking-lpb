<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'hotel_id',
        'buil_id',
        'cate',
        'type',
        'name',
        'price',
        'img',
        'status',
        'active',
        'user_id',
    ];

    public function hotelname()
    {
        return $this->belongsTo('App\Models\Hotel','hotel_id','id');
    }

    public function builname()
    {
        return $this->belongsTo('App\Models\Building','buil_id','id');
    }

    public function username()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
