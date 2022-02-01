<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class,'index'])->name('user.index');

//Route::get('/login', [UserController::class,'login'])->name('login'); 
/*
Route::get('/login', function () {
    return view('login');
});*/

Route::get('/Home', function () {
    return view('home');
});
Route::get('home', [Controller::class,'home']);
Route::get('/login', [PagesController::class,'login']);
Route::get('/index', [PagesController::class,'index']);
Route::get('/a2', [StudentController::class, 'a1']);
Route::get('/h4', [LoginController::class, 'login1']);