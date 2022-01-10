<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_code' => random_int(000000,999999),
            'name' => $this->faker->name,
            'description' => $this->faker->sentence,
            'price' => random_int(1,1000),
            'wholesale_price' => random_int(1,1000),
            'discount' => random_int(1,100),
            'stock' => random_int(1,1000),
            'mini_stock' => random_int(1,1000),
            'in_stock' => $this->faker->boolean,
        ];
    }
}
