<?php

namespace App\Models\Relations;

use App\Models\Branch;
use App\Models\Category;
use App\Models\Manufactory;

trait CarInStockRelations
{



    /**
     * Get the branch that car belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }



}
