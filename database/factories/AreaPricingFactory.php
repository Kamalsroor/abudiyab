<?php

namespace Database\Factories;

use App\Models\AreaPricing;
use Illuminate\Database\Eloquent\Factories\Factory;

class AreaPricingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AreaPricing::class;

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
