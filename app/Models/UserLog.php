<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class UserLog extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'logs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'platform',
        'device',
        'browser',
    ];

}
