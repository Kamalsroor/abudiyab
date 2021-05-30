<?php

namespace App\Models;

use App\Http\Filters\Filterable;
use Spatie\MediaLibrary\HasMedia;
use App\Support\Traits\Selectable;
use App\Http\Filters\CarFilter;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use App\Models\Relations\CarRelations;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Illuminate\Http\Request;
use MadWeb\Seoable\Traits\SeoableTrait;
use MadWeb\Seoable\Contracts\Seoable;
class Car extends Model implements HasMedia, TranslatableContract , Seoable
{
    use HasFactory;
    use Translatable;
    use InteractsWithMedia;
    use HasUploader;
    use Filterable;
    use Selectable;
    use SoftDeletes;
    use CarRelations;
    use SeoableTrait;

    /**
     * The translated attributes that are mass assignable.
     *
     * @var array
     */
    public $translatedAttributes = ['name','description'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'category_id',
        // 'branch_id',
        'manufactory_id',
        'code',
        'price1',
        'desc',
        'discount_2',
        'discount_3',
        'price2',
        'price_from_2month_to_6month',
        'price_from_6month_to_12month',
        'price_from_1year_to_2years',
        'price_from_2year_to_3years',
        'price_after_from_2month_to_6month',
        'price_after_from_6month_to_12month',
        'price_after_from_1year_to_2years',
        'price_after_from_2year_to_3years',
        'model',
        'door',
        'luggage',
        'features',
        'baby_seat_price',
        'shield_price',
        'insurance_price',
        'open_kilometers_price',
        'navigation_price',
        'home_delivery_price',
        'intercity_price',
        'is_baby_seat',
        'is_shield',
        'is_insurance',
        'is_open_kilometers',
        'is_navigation',
        'is_home_delivery',
        'description',
        'is_intercity',
        'additions',
    ];


    public function seoable()
    {
        $this->seo()
            ->setTitle('name')
            ->setDescription('name');
    }


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
        'is_baby_seat' => 'boolean',
        'is_shield' => 'boolean',
        'is_insurance' => 'boolean',
        'is_open_kilometers' => 'boolean',
        'is_navigation' => 'boolean',
        'is_home_delivery' => 'boolean',
        'is_intercity' => 'boolean',
        'additions' => 'array',
    ];

    /**
     * The query parameter's filter of the model.
     *
     * @var string
     */
    protected $filter = CarFilter::class;

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
            ->addMediaCollection('photos');

        //->useFallbackUrl('/url/to/default')
        //->singleFile()

    }



    /**
     * Get the user's first name.
     *
     * @param  string  $value
     * @return string
     */
    public function getIsFavoriteAttribute($value)
    {
        if (Request()->has('user_id')) {
            return addToFavorite::where('user_id' , Request()->get('user_id'))->where('car_id' , $this->id)->count() > 0 ? true : false;
        }

        if (auth()->check()) {
            return addToFavorite::where('user_id' , auth()->user()->id)->where('car_id' , $this->id)->count() > 0 ? true : false;
        }


        return false;
    }


    /**
     * The car main image url.
     *
     * @return bool
     */
    public function getPhoto()
    {
        return $this->getFirstMediaUrl('default');
    }


    /**
     * The car main image url.
     *
     * @return bool
     */
    public function getPhotos()
    {
        return $this->getMediaResource('photos');
    }


}
