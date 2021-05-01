<?php

namespace Database\Factories;

use App\Models\Carsale;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarsaleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Carsale::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        ];
    }
}
