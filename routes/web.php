<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
});

// Route::view('/about', 'about');

//dynamic name pass
Route::get('/about/{name}', function ($name) {
    // echo "Hello, $name";
    return view('about', ['name' => $name]);
});

// Route::redirect('home', '/about/John');


Route::get('/user/{name}', [UserController::class, 'getUserInfo']);
Route::get('/home', [UserController::class, 'getUserInfo2']);





Route::view('/user-form', 'user-form')->name('form');
Route::post('/addUser', [UserController::class, 'addUser']);


Route::get('/show', [HomeController::class, 'show']);
