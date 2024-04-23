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
}
