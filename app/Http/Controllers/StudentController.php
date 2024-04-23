<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showstudent(){

        $student = DB::table('students')->select('students.*','citis.Cities')->join('citis','students.city_id','=','citis.id')->get();

        return view('relational',compact('student'));

        //return $student;
    }

    public function showunion(){

        $teachers = DB::table('teachers')->select('name','age','city_id')->join('citis','teachers.city_id','=','citis.cities');

        $students = DB::table('students')->select('name','age','city_id')->join('citis','students.city_id','=','citis.cities')->union($teachers)->get();



        return $students;
    }

    public function chunkdata(){


        $students = DB::table('students')->orderBy('id')->chunk(3, function($students){
               
            foreach ($students as $data) {
                
                echo $data->name ."<br>";
                
            }
        });
    }
}


//I have not written WHEN() METHOD HERE

//When method is used like a if and else statement like if condition is true echo this and if it is false echo 
//this like if age is above 20 print this other wise print 18 below data.