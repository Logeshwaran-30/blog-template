<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        $title = $this->faker->unique()->sentence(6);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'short_description' => $this->faker->paragraph(2),
            'description' => $this->faker->paragraphs(5, true),
            'category_id' => Category::inRandomOrder()->first()->id,
            'status' => $this->faker->randomElement(['draft', 'published']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

