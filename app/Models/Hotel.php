<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'dis_id',
        'name',
        'address',
        'detail',
        'price',
        'dicount',
        'promotion1',
        'promotion2',
        'promotion3',
        'img1',
        'img2',
        'img3',
        'img4',
        'img5',
        'img6',
        'img7',
        'img8',
        'rate',
        'status',
        'location',
        'active',
        'user_id',
    ];

    public function disname()
    {
        return $this->belongsTo('App\Models\District','dis_id','id');
    }

    public function username()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
