<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth; // Add this line

// Redirect root URL to login page
Route::get('/', function () {
    return redirect('/login');
});

// Authentication Routes
Auth::routes();

// Admin Routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('students', StudentController::class);
});

// Student Routes
Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('/students', [StudentController::class, 'index'])->name('students.index');
});

// Home Route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
