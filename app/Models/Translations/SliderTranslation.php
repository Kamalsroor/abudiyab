<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

class SliderTranslation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','first_header','second_header'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
