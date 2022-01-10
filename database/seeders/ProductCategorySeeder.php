<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        ProductCategory::create([
//            'name' => 'Test',
//            'slug' => 'test',
//            'description' => 'test'
//        ]);
//        ProductCategory::factory()->count(10)->create();
        ProductCategory::factory()
            ->has(Product::factory()->count(5), 'products')
            ->count(10)
            ->create();
    }
}
