<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EloquentDevelopmentModel>
 */
class EloquentDevelopmentModelFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'postcode' => $this->faker->postcode,
        ];
    }
}
