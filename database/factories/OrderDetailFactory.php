<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => random_int(1,50),
            'quantity' =>  (double)random_int(1,10),
            'price' =>  (double)random_int(1,1000),
            'sub_total' => (double)random_int(1,1000),
            'discount' => (double)random_int(1,1000),
            'total' => (double)random_int(1,1000)
        ];
    }
}
