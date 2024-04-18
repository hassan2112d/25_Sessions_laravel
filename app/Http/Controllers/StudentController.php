<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showstudent(){

        $student = DB::table('students')->join('citis','students.city_id','=','citis.id')->get();

        return $student;
    }
}
