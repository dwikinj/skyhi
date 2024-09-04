<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::middleware(['guest'])->group(function() {
    Route::get('/', [AuthController::class,'showLoginForm']);
    Route::post('/login', [AuthController::class,'login'])->name('login');

    Route::get('/register', [AuthController::class,'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class,'register'])->name('register.submit');
});

Route::middleware(['auth'])->group(function() {
    Route::get('/home', [HomeController::class,'showHomePage'])->name('home');
    Route::get('/logout', [AuthController::class,'logout'])->name('logout');
    Route::get('/profile/{username}', [HomeController::class, 'showProfile'])->name('profile');
    Route::get('/user/search', [HomeController::class, 'search'])->name('search');

    Route::get('/accounts/settings/',[HomeController::class,'showAccountPage'])->name('profile.settings');
    Route::post('/accounts/settings/',[HomeController::class,'updateAccount'])->name('profile.update');

});

