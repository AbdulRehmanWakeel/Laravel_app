<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntityController extends Controller
{
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
