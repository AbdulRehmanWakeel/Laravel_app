<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EntityController;


Route::get('/', function () {
    return view('welcome');
});
Route::view('/home','home')->middleware('check1');

// Route::get('/about/{name}', function ($name) {
//     return view('about', ['name' => $name]);
// });


Route::get('user-home',[UserController::class,'userHome']);
Route::get('user-about/{name}',[UserController::class,'userAbout']);
Route::get('admin-login',[UserController::class,'adminLogin']);

Route::view('user-form','user-form');
Route::post('adduser', [UserController::class,'addUser']);

// Route Group with prefix
// Route::prefix('student/Pak')->group(function(){
//     Route::get('/show',[HomeController::class,'show']);
//     Route::get('/add',[HomeController::class,'add']);

// });
 
// Route Group with controller
Route::controller(HomeController::class)->group(function(){
    Route::get('/show','show');
    Route::get('/add','add');
    Route::get('/about/{name}','about');

});

Route::get('students',[StudentController::class,'students']);

Route::get('employees',[EmployeeController::class,'getEmployee']);

Route::get('office',[OfficeController::class,'getOffice']);

Route::get('courses',[CourseController::class,'queries']);


// Route::get('entity',[EntityController::class,'get']);
// Route::post('entity',[EntityController::class,'post']);
// Route::put('entity',[EntityController::class,'put']);
// Route::patch('entity',[EntityController::class,'patch']);
// Route::delete('entity',[EntityController::class,'delete']);

// Route::any('entity',[EntityController::class,'any']);

// Route::match(['get','post'],'entity',[EntityController::class,'match1']);

// Route::match(['put','delete'],'entity',[EntityController::class,'match2']);

Route::post('login',[EntityController::class,'login']);
Route::view('form','entity');