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

        $users = DB::table('students')->where('id',$id)->get();
        return view('singleuser',['data' => $users]);
    }

    public function insert(Request $req){

        $users = DB::table('students')->insert(
            [
                'name' => $req->username,
                'age' => $req->userage,
                'email' => $req->useremail,
                'password' => $req->userpassword ,
                'created_at' => now(),
                'updated_at' => now()

            ]
        ) ;

        if($users){

            return redirect()->route('home');
        }
        else{

            echo "Error Occurred !";
        }
    }

    public function update(Request $req,$id){

        $users = DB::table('students')->where('id', $id)->update([

            'name' => $req->username,
            'age' => $req->userage,
            'email' => $req->useremail,
            'password' => $req->userpassword
        ]);

        return redirect()->route('home');
    }

    public function delete($id){

        $users = DB::table('students')->where('id' , $id)->delete();
        

        if($users){

            return redirect()->route('home');
        }
        else{

            echo "Errorrrrr";
        }

       
    }

    public function updatepage(string $id){

        $users = DB::table('students')->find($id);

        return view('updateuser',['data'=>$users]);
    }

}
