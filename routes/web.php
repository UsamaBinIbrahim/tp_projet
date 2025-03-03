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
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function() {
    Route::get('/users/{user}/dashboard', [PostController::class, 'dashboard'])->name('dashboard');
    Route::get('/users/{user}/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('users/{user}/posts/store', [PostController::class, 'store'])->name('posts.store');

    Route::get('users/{user}/profile/show', [UserController::class, 'show'])->name('users.profile.show');
    Route::get('users/{user}/profile/edit', [UserController::class, 'edit'])->name('users.profile.edit');
    Route::post('user/{user}/profile/update', [UserController::class, 'update'])->name('users.profile.update');
});