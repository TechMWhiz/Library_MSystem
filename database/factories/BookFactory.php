<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
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
            'title' => fake()->sentence(3),
            'author' => fake()->name(),
            'isbn' => fake()->isbn13(),
            'published_date' => fake()->date(),
            'description' => fake()->paragraph(),
            'available_copies' => fake()->numberBetween(1, 10),
            'price' => fake()->randomFloat(2, 10, 100),
        ];
    }
} 