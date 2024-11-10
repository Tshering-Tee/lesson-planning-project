<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'rolemanager:admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

 // Admin route
 Route::get('/admin', [AdminController::class, 'index'])
 ->middleware(['auth', 'verified', 'rolemanager:admin'])
 ->name('admin.index');

 // Teacher route
 Route::get('/teacher', [TeacherController::class, 'index'])
 ->middleware(['auth', 'verified', 'rolemanager:teacher'])
 ->name('teacher.index');

require __DIR__.'/auth.php';
