<?php

namespace App\Models;


use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use Illuminate\Database\Eloquent\Model;
use App\Models\Branch;
use App\Models\Car;
use App\Models\User;
use App\Models\Relations\CarInStockRelations;


class addToFavorite extends Model
{
    use HasUploader;
    use CarInStockRelations;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'add_to_favorite';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'car_id',
        'user_id',
    ];


    /**
     * Get the branch that car belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the branch that car belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }





}
