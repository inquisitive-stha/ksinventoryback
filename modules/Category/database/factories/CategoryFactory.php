<?php

namespace Modules\Category\database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Category\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Category\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'slug' => $this->faker->unique()->slug,
        ];
    }
}
