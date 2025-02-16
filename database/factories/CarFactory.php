<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model_name' => fake()->name(),
            'brand' => fake()->word(),
            'color' => fake()->colorName(length: 20),
            'year' => fake()->year(),
            'release_date' => fake()->date(),
        ];
    }
}
