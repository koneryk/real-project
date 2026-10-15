<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/register',[AuthController::class,'showregisterform'])->name('register.form');
    Route::post('/register',[AuthController::class,'register'])->name('register');

    Route::get('/',[AuthController::class,'showloginform'])->name('login.form');
    Route::post('/',[AuthController::class,'login'])->name('login');
});
Route::middleware('auth')->group(function () {
    Route::get('/dashboard',[BasicController::class,'main'])->name('main');
    Route::get('/test',[BasicController::class,'test'])->name('test');
    Route::post('/logout',[AuthController::class,'logout'])->name('logout');
    Route::post('/dashboard',[BasicController::class,'submission'])->name('submission');
    Route::get('/submission',[BasicController::class,'submissionform'])->name('submission.form');
});


