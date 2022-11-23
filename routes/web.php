<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [Homecontroller::class, 'dashboard'])->name('dashboard');
Route::get('/login', [Homecontroller::class, 'login'])->name('login');
Route::get('/register', [Homecontroller::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'registerUser'])->name('registerUser');
