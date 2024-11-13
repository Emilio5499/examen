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
        /**
         * EJERCICIO 2 Se añaden todos los campos con los valores necesarios y las opciones pedidas
         */
        return [
            'title' => $this->faker->sentence(),
            'slug' => str_replace(' ', '_', 'title'),
            'summary' => $this->faker->text(50),
            'body' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement(['published', 'draft','pending','archived']),
            'reading_time'=>$this->faker->numberBetween(1,100),
            'published_at' => random_int(0, 2)
                ? $this->faker->dateTimeBetween('-1 month', '+1 months')
                : null,
        ];
    }
}
