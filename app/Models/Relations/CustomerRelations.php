<?php

namespace App\Models\Relations;

use App\Models\Car;

trait CustomerRelations
{
    //
    public function userFavorite(){
       return  $this->belongsToMany(Car::class, 'add_to_favorite', 'user_id', 'car_id');
    }
}
