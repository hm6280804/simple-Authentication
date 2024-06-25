<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', function(){
    return view('Register');
})->name('register');

Route::post('/registerSave', [UserController::class, 'register'])->name('regSave');

Route::get('/login', function(){
    return view('login');
})->name('login');

Route::post('/loginMatch', [UserController::class, 'loginMatch'])->name('loginMatch');

Route::get('/dash', [UserController::class, 'dashPage'])->name('dashboard');

Route::get('/dash/inner', [UserController::class, 'inner'])->name('inner');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');