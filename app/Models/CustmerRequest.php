<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;

class CustmerRequest extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use HasUploader;
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
    ];


    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'media',
    ];


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
    }



}
