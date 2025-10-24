<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeController extends Controller
{
    function getEmployee(){
        $data = new \App\Models\Employee;
        echo $data->getFun();
        $employees = \App\Models\Employee::all();
        return view('employees',['data'=>$employees]);
    }

    function name(){
        return Employee::all();
    }
    function save(){
        $employee = new Employee();
        $employee->name = "ayeza";
        $employee->email = "ayeza@gmail.com";
        $employee->phone = "03005754220";
        $employee->address = "Faizan town,Lahore";
        if($employee->save()){
            echo "Employee Added";
        }
    }

     
}
