<?php

namespace Modules\Product\database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Brand\Models\Brand;
use Modules\Category\Models\Category;
use Modules\Product\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Product\Models\Product>
 */
class ProductFactory extends Factory
{

    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categoryIds = Category::query()->pluck('id')->toArray();
        $brandIds = Brand::query()->pluck('id')->toArray();

        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'sku' => $this->faker->unique()->numberBetween(1, 9999),
            'category_id' => $this->faker->randomElement($categoryIds),
            'brand_id' => $this->faker->randomElement($brandIds),
        ];
    }
}
