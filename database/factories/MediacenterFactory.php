<?php

namespace Database\Factories;

use App\Models\Mediacenter;
use Illuminate\Database\Eloquent\Factories\Factory;

class MediacenterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mediacenter::class;

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
