<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    function students(){
        $students = DB::select('select * from students');
        return view('students',['students'=>$students]);

    }
}
