<?php

namespace App\Models\Relations;

use App\Models\Branch;
use App\Models\Category;
use App\Models\Manufactory;
use App\Models\Car;

trait OrderRelations
{

    /**
     * Get the car that order belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }


}
