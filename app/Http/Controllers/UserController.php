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

    public function insert(){

        $users = DB::table('students')->insert(
            [
                'name' => 'Hassan',
                'age' => 19,
                'email' => 'h@gmail.com',
                'address' => 'G.m parkview',
                'city' => 'Karachi',
                'phone' => 3149922774,
                'password' => 123456,
                'created_at' => now(),
                'updated_at' => now()

            ]
        ) ;

        dd($users);
    }

    public function update(){

        $users = DB::table('students')->where('student_id', 11)->update([

            'name' => 'Alii'
        ]);

        dd($users);
    }

    public function delete($id){

        $users = DB::table('students')->where('student_id' , $id)->delete();
        

        if($users){

            return redirect()->route('home');
        }
        else{

            echo "Errorrrrr";
        }

       
    }
}
