<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->name(),
            'resume' => $this->faker->text(200),
            'duration' => $this->faker->randomDigit(),
            'release_date' => $this->faker->dateTime(),
            'price' => $this->faker->randomFloat(2),
            'image' => $this->faker->imageUrl($width = 400, $height = 400),
            'video' => "/storage/video.mp4",

        ];
    }
}

