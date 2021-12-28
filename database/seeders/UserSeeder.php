<?php

namespace Database\Seeders;

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
                'email' => 'rehmankha73@gmail.com',
                'password' => Hash::make('secret123'),
                'email_verified_at' => now(),
                'remember_token' => now(),
            ]);
        }
    }
}
