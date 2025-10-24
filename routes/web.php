<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EntityController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\DeviceController;


// ----------------- Language Switching -----------------
// Set language route outside middleware so session is set first
Route::get('/setlang/{lang}', function($lang) {
    Session::put('lang', $lang);
    return redirect()->back();
});

// Apply middleware to all routes that need locale
Route::middleware('SetLang')->group(function () {

    // Home / Welcome
    Route::get('/', function () {
        return view('welcome');
    });

    // About page
    Route::view('/about', 'about');

    // Home page
    Route::view('/home', 'home');

    // Login page
    Route::view('/login', 'login');
    Route::view('/profile', 'profile');

    // ----------------- User Routes -----------------
    Route::get('user-home', [UserController::class, 'userHome']);
    Route::get('user-about/{name}', [UserController::class, 'userAbout']);
    Route::get('admin-login', [UserController::class, 'adminLogin']);
    Route::view('user-form', 'user-form');
    Route::post('adduser', [UserController::class, 'addUser']);

    // ----------------- HomeController Group -----------------
    Route::controller(HomeController::class)->group(function () {
        Route::get('/show', 'show');
        Route::get('/add', 'add');
        Route::get('/about/{name}', 'about');
        Route::get('/fluent','fluent');
    });

    // ----------------- Other Controllers -----------------
    // Route::get('students', [StudentController::class, 'students']);
    Route::get('employees', [EmployeeController::class, 'getEmployee']);
    Route::get('name', [EmployeeController::class, 'name']);
    Route::get('save', [EmployeeController::class, 'save']);

    Route::get('office', [OfficeController::class, 'getOffice']);
    Route::get('courses', [CourseController::class, 'queries']);

    // ----------------- Login & Entity -----------------
    Route::post('login', [LoginController::class, 'login']);
    Route::get('logout', [LoginController::class, 'logout']);

    // ----------------- Users -----------------
    Route::post('add', [UsersController::class, 'addUser']);
    Route::view('user', 'user');

    // ----------------- File Upload -----------------
    Route::view('upload', 'upload');
    Route::post('upload', [UploadController::class, 'upload']);

});

Route::view('add','add-student');
Route::post('add', [StudentController::class, 'add']);
Route::get('list', [StudentController::class, 'list']);
Route::get('delete/{id}', [StudentController::class, 'delete']);
Route::get('edit/{id}', [StudentController::class, 'edit']);
Route::put('edit-student/{id}', [StudentController::class, 'update']);
Route::get('search', [StudentController::class, 'search']);
Route::post('delete-multi', [StudentController::class, 'deleteMultiple']);

Route::view('about-us','aboutus');
Route::view('home','index');
Route::view('login','login1');
Route::view('admin','admin');
Route::view('home','template.home');
Route::view('login','template.login');

Route::get('sell', [SellerController::class, 'sell']);
Route::get('many', [SellerController::class, 'manyRel']);
Route::get('many-to-one', [SellerController::class, 'manyToOne']);
Route::get('many-to-many', [SellerController::class, 'manyToMany']);
Route::get('inline', [SellerController::class, 'inline']);


Route::post('send-email',[MailController::class,'sendEmail']);
Route::view('send-email','send-email');

Route::get('device/{key:test_id}', [DeviceController::class, 'index']);

