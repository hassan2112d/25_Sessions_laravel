<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Citi;
use App\Models\Student;
use App\Models\teacher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Student::factory()->count(10)->create();
        Citi::factory()->count(10)->create();
        teacher::factory()->count(5)->create();
    }
}
