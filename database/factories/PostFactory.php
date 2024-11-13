<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'slug' => str_replace(' ', '_', 'title'),
            'summary' => $this->faker->words(50, true),
            'body' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement(['published', 'draft', 'pending', 'archived']),
            'reading_time' => $this->randomElement([1,2,3,4,5,6,7]),
            'published_at' => random_int(0, 2)
                ? $this->faker->dateTimeBetween('-1 month', '+1 months')
                : null,
        ];
    }
}
