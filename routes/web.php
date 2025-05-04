<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userfromController;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;
use App\Models\UserForm;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/home', function () {
//     return view('home');
// });

Route::view('/home', 'home')->middleware(middleware: 'check1');

// Route::view('/about', 'about');



//dynamic name pass
Route::get('/about/{name}', function ($name) {
    // echo "Hello, $name";
    return view('about', ['name' => $name]);
});

// Route::redirect('home', '/about/John');


// Route::get('/user/{name}', [UserController::class, 'getUserInfo']);
// Route::get('/home', [UserController::class, 'getUserInfo2']);



Route::view('/user-form', 'user-form')->name('form');
Route::post('/addUser', action: [userfromController::class,  'addUser']);

Route::controller(UserController::class)->group(function () {
    Route::get('/user/{name}',  'getUserInfo');
    Route::get('/home',  'getUserInfo2');
});

// Route::post('/addUser', action: [UserController::class, 'addUser']);
// Route::get('/user/{name}', [UserController::class, 'getUserInfo']);
// Route::get('/home', [UserController::class, 'getUserInfo2']);


Route::get('/show', [HomeController::class, 'show']);

// Route::view('student/studentAdd', 'studentAdd');
// Route::view('student/studentShow', [HomeController::class,'studentShow']);

Route::prefix( 'student')->group(function () {
    
       Route::view('studentAdd', 'studentAdd');
       Route::get('studentShow', [HomeController::class,'studentShow']);

});


Route::get('/users',[UserController::class,'users']);



