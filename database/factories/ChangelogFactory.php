<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Changelog>
 */
class ChangelogFactory extends Factory
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
            'image' => $this->faker->imageUrl(),
            'type' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
        ];
    }
}