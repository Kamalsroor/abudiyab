<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoldHistory extends Model
{
    use HasFactory;
    protected $table='sold_history';
    protected $fillable=[
        'user_id',
        'car_id',
        'sold_quantites',
        'sold_price',
    ];
}
