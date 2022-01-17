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
            'product_code'  => random_int(000000,999999),
            'name' => $this->faker->name,
            'description' => $this->faker->sentence,
            'brand' => $this->faker->word,
            'unit_price' => random_int(1,1000),
            'whole_sale_price' => random_int(1,1000),
            'initial_stock' => random_int(1,1000),
            'current_stock' => random_int(1,1000),
            'in_stock' => $this->faker->boolean,
            'featured_image' => $this->faker->imageUrl,
            'image_1' => $this->faker->imageUrl,
            'image_2' => $this->faker->imageUrl,
            'image_3' => $this->faker->imageUrl,
            'image_4' => $this->faker->imageUrl,
        ];
    }
}
