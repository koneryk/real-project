<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Route;
use function Pest\Laravel\get;

Route::middleware('guest')->group(function () {
    Route::get('/register',[AuthController::class,'showregisterform'])->name('register.form');
    Route::post('/register',[AuthController::class,'register'])->name('register');
    Route::get('/',[AuthController::class,'showloginform'])->name('login.form');
    Route::post('/',[AuthController::class,'login'])->name('login');
});
Route::middleware(['auth','role:user'])->group(function () {
    Route::get('/submission',[BasicController::class,'submissionform'])->name('submission.form');
    Route::get('/test',[BasicController::class,'test'])->name('test');
    Route::post('/dashboard',[BasicController::class,'submission'])->name('submission.create.post');
    Route::get('/dashboard',[BasicController::class,'submission_create'])->name('submission.create.form');
    Route::fallback(function () {
        return redirect()->route('submission.create.form');
    });
});
Route::middleware('auth')->group(function () {
    Route::post('/logout',[AuthController::class,'logout'])->name('logout');
});
Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admin',[AdminController::class,'admin'])->name('admin');
    Route::get('/admin/rooms',[AdminController::class,'rooms'])->name('admin.rooms');
    Route::get('/admin/rooms/add',[AdminController::class,'addroom'])->name('admin.rooms.add');
    Route::post('/admin/rooms/add',[AdminController::class,'addformfunction'])->name('admin.rooms.add.function');
    Route::get('/submission/{id}/edit',[AdminController::class,'subEditAdin'])->name('subEditAdin');
    Route::post('/submission/{id}/edit',[AdminController::class,'subEditAdin_succes'])->name('subEditAdin_succes');
    Route::fallback(function () {
        return redirect()->route('admin');
    });
});



