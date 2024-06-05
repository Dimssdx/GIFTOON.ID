<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/how-it-works', function () {
    return view('howitworks');
})->middleware(['auth', 'verified'])->name('howitworks');

Route::get('/My-Donations', function () {
    return view('mydonations');
})->middleware(['auth', 'verified'])->name('mydonations');

Route::get('/All-Donations', function () {
    return view('alldonations');
})->middleware(['auth', 'verified'])->name('alldonations');

Route::get('/create-donation', function () {
    return view('createdonation');
})->middleware(['auth', 'verified'])->name('createdonation');

require __DIR__.'/auth.php';
