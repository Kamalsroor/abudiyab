<?php

namespace App\Models;

use App\Http\Filters\Filterable;
use App\Support\Traits\Selectable;
use App\Http\Filters\RegionFilter;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Region extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    use Filterable;
    use Selectable;
    use SoftDeletes;

    /**
     * The translated attributes that are mass assignable.
     *
     * @var array
     */
    public $translatedAttributes = ['name'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'code',
        'master_id',
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'translations',
    ];


    /**
     * Get the phone record associated with the user.
     */
    public function MasterBranch()
    {
        return $this->belongsTo(Branch::class , "master_id");
    }


    /**
     * The query parameter's filter of the model.
     *
     * @var string
     */
    protected $filter = RegionFilter::class;
}
