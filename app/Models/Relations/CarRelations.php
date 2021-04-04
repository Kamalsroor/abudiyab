<?php

namespace App\Models\Relations;

use App\Models\Branch;
use App\Models\Category;
use App\Models\Manufactory;

trait CarRelations
{

    /**
     * Get the category that car belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }


    // /**
    //  * Get the branch that car belongs to.
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    //  */
    // public function branch()
    // {
    //     return $this->belongsTo(Branch::class, 'branch_id');
    // }



    /**
     * Get the manufactory that car belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function manufactory()
    {
        return $this->belongsTo(Manufactory::class, 'manufactory_id');
    }

}
