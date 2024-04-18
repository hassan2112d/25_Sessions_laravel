<?php

namespace Database\Factories;

use App\Models\Citi;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Cities' => $this->faker->city(),
            // Add more attributes if needed
        ];
    }
}
