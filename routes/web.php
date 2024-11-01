<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("home");
})->name('home');

Route::get("/dashboard", [DashboardController::class, 'index'])->name('dashboard');
// ->middleware('auth');

Route::post("/logout", [LogoutController::class, 'store'])->name('logout');

Route::get("/login", [LoginController::class, 'index'])->name('login');
Route::post("/login", [LoginController::class, 'store']);

Route::get("/register", [RegisterController::class, 'index'])->name('register');
Route::post("/register", [RegisterController::class, 'store']);

Route::get("/posts", [PostController::class, 'index'])->name('posts');
Route::post("/posts", [PostController::class, 'store']);