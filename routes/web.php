<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AdminLoginController;

Route::get('/', function () {
    return view('welcome');
});

// User routes
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

// Admin routes
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminLoginController::class, 'login']);
Route::post('admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

App\Models\User::create(['name' => 'User', 'email' => 'user@example.com', 'password' => bcrypt('password')]);
App\Models\Admin::create(['name' => 'Admin', 'email' => 'admin@example.com', 'password' => bcrypt('password')]);