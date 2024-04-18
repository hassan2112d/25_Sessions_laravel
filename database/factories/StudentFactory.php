<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => $this->faker->name(),
            'age' => $this->faker->numberBetween(10, 30),
            'email' => $this->faker->email(),
            'password' => $this->faker->password(),
            'city_id' => $this->faker->numberBetween(1,9)
        ];
    }
}
