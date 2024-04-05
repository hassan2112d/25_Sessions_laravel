<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showstudents(){

        $users = DB::table('students')->get();
        //return $users;
        //dump($users);

        return view("allusers",['data' => $users]);
        
    }

    public function singlestudents($id){

        $users = DB::table('students')->where('student_id',$id)->get();
        return view('singleuser',['data' => $users]);
    }
}
