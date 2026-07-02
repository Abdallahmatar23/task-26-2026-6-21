<?php

namespace Database\Factories;


use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Auth\User;

/**
 * @extends Factory<Post>
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
            'title' => $this->faker->sentence(6),
            'description' => $this->faker->paragraph(10),
            'image' => 'client/images/blog/blog-' . rand(1, 8) . '.jpg',
            'user_id' => User::inRandomOrder()->first()->id,
            'category_id' => 4,
            // 'user_id' => 3,
            // 'category_id' => 4,
        ];
    }
}
