<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function getEmployee(){
        $data = new \App\Models\Employee;
        echo $data->getFun();
        $employees = \App\Models\Employee::all();
        return view('employees',['data'=>$employees]);
    }
}
