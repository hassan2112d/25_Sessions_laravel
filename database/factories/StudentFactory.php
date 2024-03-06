<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'age'=>fake()->numberBetween(10,30),
            'email'=>fake()->email(),
            'address'=>fake()->address(),
            'city'=>fake()->city(),
            'phone'=>fake()->phoneNumber(),
            'password'=>fake()->password()
        ];
    }
}
