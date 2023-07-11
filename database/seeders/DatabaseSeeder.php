<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        
        // Category::factory(10)->create();

        Product::factory(200)->create([
            'category_id' => 5,
        ]);

        // Product::factory(5)->create([
        //     'category_id' => 2,
        // ]);


        // Category::factory()->create([
        //     'categoryName' => 'Food',
        // ]);

        // Category::factory()->create([
        //     'categoryName' => 'Toy',
        // ]);

        // Category::factory()->create([
        //     'categoryName' => 'Drink',
        // ]);

        // User::factory()->create([
        //     'name' => 'Test',
        //     'email' => 'test@gmail.com',
        // ]);
    }
}
