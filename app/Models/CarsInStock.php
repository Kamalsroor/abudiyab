<?php

namespace App\Models;


use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use Illuminate\Database\Eloquent\Model;
use App\Models\Branch;
use App\Models\Car;
use App\Models\Relations\CarInStockRelations;


class CarsInStock extends Model
{
    use HasUploader;
    use CarInStockRelations;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cars_in_stock';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'car_id',
        'branch_id',
        'count',
    ];


    /**
     * Get the branch that car belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
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
