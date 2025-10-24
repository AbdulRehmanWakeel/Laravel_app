<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function login(Request $req){
        $req->session()->put('name',$req->input('name'));
        $req->session()->put('allData',$req->input());

        return redirect('profile');
    }
    
    function logout(){
        session()->pull('name');
        return redirect('profile');


    }
}
