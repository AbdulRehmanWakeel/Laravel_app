<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function addUser(Request $request){
        $request->session()->flash('message','User Added Successfullly.');
        $request->session()->flash('name','hamza');

        return redirect('user');
    }
}
