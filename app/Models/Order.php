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
        'user_id',
        'car_price',
        'membership_discount',
        'promotional_discount',
        'authorization_fee',
        'status',
        'reason',

    ];

    const orderStatus=[
        'pending' => 'جاري انتظار تاكيد الحجز',
        'confirmed' => 'الحجز مؤاكد',
        'rejected' => ' الحجز مرفوض',
        'done' => ' الحجز تم',
    ];
    const orderType=[
        'cash' => 'نقدا',
        'visa' => 'فيزا',
        'points' => ' نقاطي',
    ];


    protected $casts = [
        'visa_buy' => 'boolean',
        'features_added' => 'array',
        'delivery_date' => 'datetime',
        'reciving_date' => 'datetime',
    ];

      /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'car',
    ];


        /**
     * Determine whither the message was read.
     *
     * @return bool
     */
    public function read()
    {
        return ! ! $this->read_at;
    }



    /**
     * Determine whither the message was read.
     *
     * @return bool
     */
    public function confirmed()
    {
        return $this->status == "confirmed";
    }

    /**
     * Determine whither the message was read.
     *
     * @return bool
     */
    public function pending()
    {
        return $this->status == "pending";
    }


    /**
     * Determine whither the message was read.
     *
     * @return bool
     */
    public function rejected()
    {
        return $this->status == "rejected";
    }


    /**
     * Mark the message as read.
     *
     * @return $this
     */
    public function markAsRead()
    {
        if (! $this->read()) {
            $this->forceFill(['read_at' => now()])->save();
        }

        return $this;
    }

    /**
     * Mark the message as read.
     *
     * @return $this
     */
    public function markAsRejected($reason)
    {
        if (! $this->confirmed()) {
            $this->forceFill(['status' => "rejected",'reason' => $reason])->save();
        }

        return $this;
    }

    /**
     * Mark the message as read.
     *
     * @return $this
     */
    public function markAsConfirmed()
    {
        if (! $this->rejected()) {
            $this->forceFill(['status' => "confirmed"])->save();
        }

        return $this;
    }

    /**
     * Mark the message as unread.
     *
     * @return $this
     */
    public function markAsUnread()
    {
        if ($this->read()) {
            $this->forceFill(['read_at' => null])->save();
        }

        return $this;
    }

    /**
     * Scope the query to include only unread messages.
     *
     * @param $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUnread($query)
    {

        return $query->whereNull('read_at');
    }

    /**
     * Scope the query to include only unread messages.
     *
     * @param $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeIsConfirmed($query)
    {
        return $query->where('status' , 'confirmed');
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
