<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class WishListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $total_product = Product::query()->count();
        foreach (User::query()->get() as $user) {
            $user->products_in_wishlist()->create(['product_id' => random_int(1, (int)$total_product)]);
        }

    }
}
