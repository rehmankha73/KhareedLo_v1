<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::factory()
            ->has(Order::factory()->has(OrderDetail::factory(),'order_details')->count(3)
                ->count(5), 'orders')
            ->count(20)
            ->create();
    }
}
