<?php

namespace App\Models;

use App\Http\Filters\Filterable;
use Spatie\MediaLibrary\HasMedia;
use App\Support\Traits\Selectable;
use App\Http\Filters\MembershipFilter;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Membership extends Model implements HasMedia, TranslatableContract
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
    public $translatedAttributes = ['name'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'rental_discount',
        'ratio_points',
        'extra_hours',
        'allowed_Kilos',
        'delivery_discount_regions',
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

    /**
     * The query parameter's filter of the model.
     *
     * @var string
     */
    protected $filter = MembershipFilter::class;

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
}
