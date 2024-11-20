<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->address(),
            'phoneNumber' => $this->faker->phoneNumber(),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'birthday' => $this->faker->date('Y-m-d'),
        ];
    }
}
