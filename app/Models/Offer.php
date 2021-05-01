<?php

namespace App\Models;

use App\Http\Filters\Filterable;
use Spatie\MediaLibrary\HasMedia;
use App\Support\Traits\Selectable;
use App\Http\Filters\OfferFilter;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Offer extends Model implements HasMedia, TranslatableContract
{
    use HasFactory;
    use Translatable;
    use InteractsWithMedia;
    use HasUploader;
    use Filterable;
    use Selectable;
    use SoftDeletes;

    /**
     * The translated attributes that are mass assignable.
     *
     * @var array
     */
    public $translatedAttributes = ['name','des'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'des',
        'discount_type',
        'discount_value',
        'is_work',
        'limit',
        'from',
        'to',
        'type',
        // 'value',
        'consumer',
        'branch_type',
        'branch_value',
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'translations',
        'media',
    ];


    protected $casts = [
        'branch_value' => 'array',
        // 'value' => 'array',
    ];


    /**
     * The query parameter's filter of the model.
     *
     * @var string
     */
    protected $filter = OfferFilter::class;

    /**
     * Define the media collections.
     *
     * @return void
     */
    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('default');
        //->useFallbackUrl('/url/to/default')
        //->singleFile()

    }





    /**
     * Get all of the cars that are assigned this offar.
     */
    public function cars()
    {
        return $this->morphedByMany(Car::class, 'offarable');
    }

    /**
     * Get all of the videos that are assigned this offar.
     */
    public function videos()
    {
        return $this->morphedByMany(Video::class, 'offarable');
    }
}
