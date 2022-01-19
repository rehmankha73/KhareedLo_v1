<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(User::query()->count() === 0) {
            User::query()->create([
                'name' => 'Rehman Ahmed Khan',
                'email' => 'user@user.com',
                'password' => Hash::make('user'),
                'email_verified_at' => now(),
                'remember_token' => now(),
                'is_admin' => true,
            ]);
        }

        User::factory()
            ->has(Order::factory()->has(OrderDetail::factory(),'order_details')->count(3)
                ->count(5), 'orders')
            ->count(20)
            ->create();
    }
}
