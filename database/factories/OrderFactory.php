<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sub_total' => (double)random_int(1,1000),
            'discount' => (double)random_int(1,1000),
            'total' => (double)random_int(1,1000),
        ];
    }
}
