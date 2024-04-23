<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\teacher;
class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i= 1; $i>6; $i++){

            Teacher::create([
               
                'name' => fake()->name(),
                'email' => fake()->unique()->email(),
                'age' => rand(18, 30), // Generate a random age between 18 and 30
                'password' => bcrypt('password'),
            ]);
        }
    }
}
