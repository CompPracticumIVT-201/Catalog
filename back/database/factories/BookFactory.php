<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author' => fake()->name,
            'picture_path' => fake()->url,
            'price' => rand(10, 1000),
            'name_book' => fake()->word,
            'production' => fake()->address(),
            'year_production' => fake()->year,
            'page' => rand(10,1000),
            'type_preview' => fake()->word,
            'age_baryer'=> '+18',
        ];
    }
}
