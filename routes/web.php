<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/login', [UserController::class, 'login'])
    ->name('login');

// говорит о том, что доступ к данному маршруту возможен после успешной отработки middleware - 'auth'
// middleware выполнив проверку и получив что пользователь не авторизирован, попытается перебросить на маршрут "/login"
Route::get('/admin', [MainController::class, 'index'])
    ->middleware(['auth'])
    ->name('admin.main.index');

Route::post('/authenticate', [UserController::class, 'authenticate'])
    ->name('authenticate');
