<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Warehouse\database\factories\WarehouseFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Saroj Shrestha',
            'email' => 'thesarojstha@gmail.com',
        ]);

        $users = User::factory(9)->create();

        //create Warehouse Seeder
        $warehouses = WarehouseFactory::new()->count(50)->create();

        Category::factory(10)->create();
    }
}
