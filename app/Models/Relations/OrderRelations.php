<?php

namespace App\Models\Relations;

use App\Models\Branch;
use App\Models\Category;
use App\Models\Manufactory;
use App\Models\Car;
use App\Models\User;

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

    /**
     * Get the branch that car belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function receivingBranch()
    {
        return $this->belongsTo(Branch::class, 'receiving_branch_id');
    }



    /**
     * Get the branch that car belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function deliveryBranch()
    {
        return $this->belongsTo(Branch::class, 'delivery_branch');
    }


    /**
     * Get the branch that car belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }





}
