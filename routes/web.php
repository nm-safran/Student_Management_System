<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Redirect root URL to login page
Route::get('/', function () {
    return redirect('/login');
});

// Authentication Routes
Auth::routes();

// Admin Routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('students', StudentController::class);
});

// Student Routes
Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('/students', [StudentController::class, 'index'])->name('students.index');
});

// Home Route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
