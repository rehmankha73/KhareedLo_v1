<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->email,
            'country' => $this->faker->country,
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'state' => $this->faker->city,
            'postcode' => $this->faker->postcode,
            'phone' => $this->faker->e164PhoneNumber,
        ];
    }
}
