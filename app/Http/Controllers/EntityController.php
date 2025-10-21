<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntityController extends Controller
{
    function login(Request $req){
        echo "Request method is " . $req->method();
        echo "<br>";
        echo "Request path is " . $req->path();
        echo "<br>";
        echo "Request url is " . $req->url();
        echo "<br>";
        echo "name is " . $req->input('entity');
        echo "<br>";
        print_r($req->collect());
        echo "<br>";
        echo "ip name is " . $req->ip();
        echo "<br>";

        if($req->isMethod('post')){
            echo "execute code for post request";
        }
        else{
            echo "execute code for other request";
        }
        echo "<br>";

        if($req->is('login')){
            echo "execute code for login path";
        }
        else{
            echo "execute code for other path";
        }

    }
    function get(){
        return "Get method called";
         
    }
    function post(){
        return "Post method called";
    }
    
    function put(){
        return "Put method called";
    }
    function patch(){
        return "Patch method called";

    }
    function delete(){
        return "Delete method called";
    }
    function any(){
        return "any function called";
    }
    function match1(){
        return "match1 function called";
    }
    function match2(){
        return "match2 function called";
    }
    
}
