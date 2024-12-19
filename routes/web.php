<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyPageController;


Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

// Route::middleware(['custom'])->group(function () {
    Route::get('/homepage', [MyPageController::class, 'Home_page']);
    // Add more routes that require the custom middleware here
// });

Route::post('/createAccount', [registerController::class, 'register_account']);

Route::post('/verify-Account', [loginController::class, 'verifyAccount']);

Route::get('/logout', [loginController::class, 'destroy']);
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
