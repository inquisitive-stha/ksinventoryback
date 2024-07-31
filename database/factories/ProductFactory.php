<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categoryIds = Category::pluck('id')->toArray();
        $brandIds = Brand::pluck('id')->toArray();

        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'sku' => $this->faker->unique()->numberBetween(1, 9999),
            'category_id' => $this->faker->randomElement($categoryIds),
            'brand_id' => $this->faker->randomElement($brandIds),
        ];
    }
}
