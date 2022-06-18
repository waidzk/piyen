<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 5),
            'title' => Str::title($this->faker->sentence(8)),
            'slug' => Str::slug($this->faker->sentence(8), '-'),
            'body' => $this->faker->paragraph(50),
            'photo' => 'banner.jpg',
        ];
    }
}
