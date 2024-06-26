<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [
            'category_id' => fake()->randomElement([1,2,3,4,5]),
            'title' => fake()->word(),
            'description' => fake()->sentence(),
            'prix' => fake()->randomFloat(2,10,150),
            'stock' => fake()->randomNumber(3,false),
            'image' => fake()->imageURL(640, 480, 'animals', true),
        ];
    }
}
