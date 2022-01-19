<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::query()->create([
            'name' => 'Rehman Ahmed Khan',
            'email' => 'admin@admin.com',
            'phone' => '+923036473659',
            'password' => Hash::make('admin'),
        ]);
    }
}
