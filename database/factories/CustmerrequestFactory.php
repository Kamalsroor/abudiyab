<?php

namespace Database\Factories;

use App\Models\Custmerrequest;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustmerrequestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Custmerrequest::class;

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
