<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use App\Models\WishList;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            ProductCategorySeeder::class,
            UserSeeder::class,
            WishListSeeder::class,
        ]);
    }
}
