<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CourseController extends Controller
{
    function queries(){
        // $result = DB::table('courses')->get();
        // $result = DB::table('courses')->where('name','Java')->get();
        // $result = DB::table('courses')->first();  // it causes a error. so next line passes array so gives a first result shows.
        // $result = [$result];

        // $result = DB::table('courses')->insert([
        //     'name'=>'Html',
        //     'description'=>'This is a html course.'
        // ]);
        // if($result){
        //     return "Data inserted successfully.";
        // } else{
        //     return "Data not inserted.";
        // }

        // $result = DB::table('courses')->where('name','Javascript')->update([
        //     'description'=>'This is a web development course.'
        // ]);
        // if($result){
        //     return "Data updated successfully.";
        // } else{
        //     return "Data not updated.";
        // }

        // $result = DB::table('courses')->where('name','Java')->delete();
        // if($result){
        //     return "Data deleted successfully.";
        // } else{
        //     return "Data not deleted.";
        // }

        $courses = DB::table('courses')
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();

        return view('courses', ['courses' => $courses]);
    }
}
