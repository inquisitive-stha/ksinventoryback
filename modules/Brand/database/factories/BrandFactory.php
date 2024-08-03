<?php

namespace Modules\Brand\database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Brand\Models\Brand;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Brand\Models\Brand>
 */
class BrandFactory extends Factory
{
    protected $model = Brand::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            'slug' => $this->faker->unique()->slug,
        ];
    }
}
