<?php

namespace App\Models;

use App\Http\Filters\Filterable;
use App\Support\Traits\Selectable;
use App\Http\Filters\AreaPricingFilter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AreaPricing extends Model
{
    use HasFactory;
    use Filterable;
    use Selectable;
    use SoftDeletes;

    /**
     * The query parameter's filter of the model.
     *
     * @var string
     */
    protected $filter = AreaPricingFilter::class;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'region_id',
        'region_to_id',
        'price',
    ];




    /**
     * Get the region that car belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }


    /**
     * Get the region that car belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function regionTo()
    {
        return $this->belongsTo(Region::class, 'region_to_id');
    }

}
