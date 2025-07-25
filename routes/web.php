<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', [UserController::class, 'login'])
        ->name('login');

    Route::post('/login', [UserController::class, 'authenticate'])
        ->name('login.authenticate');
});


// middleware('isAdmin') зарегистрирован в bootstrap/app.php
Route::prefix('admin')->middleware('isAdmin')->group(function () {
    // говорит о том, что доступ к данному маршруту возможен после успешной отработки middleware - 'auth'
    // middleware выполнив проверку и получив что пользователь не авторизирован, попытается перебросить на маршрут "/login"
    Route::get('/', [MainController::class, 'index'])
        // ->middleware(['auth'])
        // ->middleware(\App\Http\Middleware\AdminMiddleware::class)
        ->middleware(['isAdmin'])
        ->name('admin.main.index');

    Route::resource('/categories', CategoryController::class);
    Route::resource('/posts', PostController::class);
});

