<?php

namespace Modules\Warehouse\database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Modules\Warehouse\Models\Warehouse;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Warehouse\Models\Warehouse>
 */
class WarehouseFactory extends Factory
{

    protected $model = Warehouse::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->words(2, true);
        $slug  = Str::of($title)->slug('-');
        return [
            'name' => $title,
            'slug' => $slug,
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
