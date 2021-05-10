<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

class AdditionTranslation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','mini_des','des',];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
