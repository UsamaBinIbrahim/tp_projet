<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('index');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'store'])->name('register.store');

Route::get('/dashboard/{user}', [PostController::class, 'dashboard'])->name('posts.dashboard');
Route::get('/posts/{user}/create', [PostController::class, 'create'])->name('posts.create');