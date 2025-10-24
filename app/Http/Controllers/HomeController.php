<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    function show(){
        return "Student List";
    }
    function add(){
        return "add new student";
    }
    function about($name){
        return $name;
    }
    function fluent(){
        $info = "hello,I use laravel 12 version";
        $info = Str::of($info)
        ->ucfirst()               
        ->replaceFirst('Hello', 'Welcome')   
        ->camel();                

        echo $info;
    }

}
