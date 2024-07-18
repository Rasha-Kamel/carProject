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
            'title' => fake()->sentence(),
            'content' => fake()->text(),
            'luggage' => fake()->randomNumber(2,false),
            'doors' => fake()->randomNumber(3,false),
            'passengers' => fake()->randomNumber(3,false),
            'price' => fake()->randomNumber(5,false),
            'active' => fake()->randomElement(['yes','no']),
            'image' => fake()->imageUrl(),
            'category' => fake()->text(),

            
         
        ];
    }
}
