<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentController extends Controller
{
    function students(){
        $students = DB::select('select * from students');
        return view('students',['students'=>$students]);

    }
    function add(Request $req){
        $student = new Student();
        $student->name = $req->name;
        $student->email = $req->email;
        $student->phone = $req->phone;
        $student->save();
        if($student){
            return redirect('list');
        }
        else{
            return "Operation failed";
        }
    }

    function list(){
        $studentData = Student::paginate(3);
        return view('list-student',['students'=>$studentData]);

    }

    function delete($id){
        $isDeleted = Student::destroy($id);
        if($isDeleted){
            return redirect('list');
        }
    }

    function edit($id){
        $student = Student::find($id);
        return view('edit',['data'=>$student]);
    }
    function update(Request $request, $id){
        $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        if($student->save()){
            return redirect('list');
        }
        else{
            return "Update operation failed";
        }
    }

    function search(Request $request){
        $studentData = Student::where('name','like',"%$request->search%")->get();
        return view('list-student',['students'=>$studentData,'search'=>$request->search]);
    }

    function deleteMultiple(Request $request){
        $result = Student::destroy($request->ids);
        if($result){
            return redirect('list');
        }
        else{
            return "student data not deleted";
        }
        
    }


}
