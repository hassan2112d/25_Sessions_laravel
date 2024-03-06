<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

    for($i = 1; $i<=10; $i++){
    
      Student::create([


        'name' => fake()->name(),
        'email' => fake()->unique()->email()
      ]);


    }

        //File data Insert
        // $json = Storage::get('database/json/students.json');
        // $students = collect(json_decode($json));
 
        // $students->each(function($students){

        //     Student::create([

        //             'name'=>$students->name,
        //             'email'=>$students->email
        
        //         ]);
        // });
           

        // Single Data Insert
        // Student::create([

        //     'name'=>'Ali',
        //     'email'=>'a@gmail.com'

        // ]);
    }
}
