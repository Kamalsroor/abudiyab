<?php

namespace App\Models;

use App\Http\Filters\Filterable;
use Spatie\MediaLibrary\HasMedia;
use App\Support\Traits\Selectable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Http\Filters\CustmerrequestFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use Illuminate\Http\Request;

class Custmerrequest extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use HasUploader;
    use Filterable;
    use Selectable;
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'id_number',
        'id_expiry_date',
        'driver_id_expiry_date',
        'date_of_birth',
        'nationality',
        'gender',
        'address',
        'post_box',
        'driver_number',
        'is_confirmed',
        'description',
    ];




    protected $table='custmer_requests';
    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'media',
    ];

    /**
     * The query parameter's filter of the model.
     *
     * @var string
     */
    protected $filter = CustmerrequestFilter::class;



    /**
     * Define the media collections.
     *
     * @return void
     */
    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('default');
        $this
            ->addMediaCollection('identityFace')
            ->singleFile();
        $this
            ->addMediaCollection('identityBack')
            ->singleFile();
        $this
            ->addMediaCollection('licenceFace')
            ->singleFile();
        $this
            ->addMediaCollection('licenceBack')
            ->singleFile();
            //->useFallbackUrl('/url/to/default')
            //->singleFile()

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
    public function scopePending($query)
    {
        return $query->where('is_confirmed','pending');
    }


}
