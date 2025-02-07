<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
Route::resource('users', AdminController::class);
