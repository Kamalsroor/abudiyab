<?php

namespace App\Models;

use App\Http\Filters\Filterable;
use App\Support\Traits\Selectable;
use App\Http\Filters\OrderFilter;
use App\Models\Relations\OrderRelations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    use Filterable;
    use Selectable;
    use SoftDeletes;
    use OrderRelations;

    /**
     * The query parameter's filter of the model.
     *
     * @var string
     */
    protected $filter = OrderFilter::class;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'delivery_date',
        'reciving_date',
        'price',
        'days',
        'features_added',
        'payment_type',
        'payment_status',
        'payment_id',
        'receiving_branch_id',
        'delivery_branch',
        'visa_buy',
        'car_id',
    ];



    protected $casts = [
        'visa_buy' => 'boolean',
        'features_added' => 'array',
        'delivery_date' => 'date',
        'reciving_date' => 'date',
    ];

      /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'car',
    ];




}
