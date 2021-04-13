<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

class BranchTranslation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
        protected $fillable = ['name','address'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
