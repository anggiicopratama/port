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
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(4, 7)),
            'slug' => $this->faker->slug(mt_rand(2, 4)),
            'excerpt' => $this->faker->sentence(mt_rand(10, 15)),
            'content' => $this->faker->paragraph(mt_rand(6, 10)),
            'user_id' => mt_rand(1, 5),
            'category_id' => mt_rand(1, 3),
        ];
    }
}
