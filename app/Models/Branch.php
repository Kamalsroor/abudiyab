<?php

namespace App\Models;

use App\Http\Filters\Filterable;
use Spatie\MediaLibrary\HasMedia;
use App\Support\Traits\Selectable;
use App\Http\Filters\BranchFilter;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Branch extends Model implements HasMedia, TranslatableContract
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
    public $translatedAttributes = ['name','address'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'code',
        'p_coud',
        'tele_number',
        'work_time',
        'address',
    ];
    const Region= [
        1 => "المنطقه الوسطي",
        2 => "المنطقه الغربيه",
        3 => "المنطقه الشرقيه",
        4 => "المنطقه الجنوبيه",
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
        'work_time' => 'array'
    ];
    /**
     * The query parameter's filter of the model.
     *
     * @var string
     */
    protected $filter = BranchFilter::class;

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
     * Get the region that car belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region()
    {
        return $this->belongsTo(Region::class, 'code');
    }


}
