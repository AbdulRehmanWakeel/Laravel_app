<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    function userHome(){
        $name = "Anil";
        $users = ['sam','peter','eman'];
        return view('home',['name'=>$name, 'users'=>$users]);
    }
    function userAbout($name){
        return view('about',['user'=>$name]);
    }
    function adminLogin(){
        if(View::exists('admin.login')){
            return view('admin.login');
        } else{
            echo "No views found";
        }
    }
    function addUser(Request $request){

        $request->validate([
            'username' => 'required | min:3 | max:15',
            'email' => 'required | email',
            'city' => 'required | uppercase',
            'skill' => 'required',
            'gender' => 'required',

        ],
        [
            'username.required'=> 'User name field can not be empty',
            'username.min'=> 'User name have to be atleast 3 characters',
            'username.max'=> 'max characters limit is 15 for user name ',
            'email.email'=> 'not a valid email',
            'city.uppercase' => 'city should be in uppercase only',


        ]

    );
        echo "User name is $request->username.";
        echo "<br>";
        echo "User email is $request->email.";
        echo "<br>";
        echo "User city is $request->city.";
        echo "<br>";
        echo "User gender is $request->gender.";

        echo "<br>";
        echo "User age is $request->age.";

        echo "<br>";
        print_r($request->skill);


    }
}
