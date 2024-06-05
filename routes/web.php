<?php

use App\Http\Controllers\DonationsController;
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

Route::get('/My-Donations', [DonationsController::class, 'mydonations'])->middleware(['auth', 'verified'])->name('mydonations');
Route::get('/All-Donations', [DonationsController::class, 'index'])->middleware(['auth', 'verified'])->name('alldonations');
Route::get('/create-donation', [DonationsController::class, 'create'])->middleware(['auth', 'verified'])->name('createdonation');
Route::post('/store-donation', [DonationsController::class, 'store'])->name('donations.store');

Route::get('donasis/index', [DonationsController::class, 'index'])->name('donasis.index');
Route::get('donasis/show/{id}', [DonationsController::class, 'show'])->name('donasis.show');
Route::get('donasis/edit/{id}', [DonationsController::class, 'edit'])->name('donasis.edit');
Route::patch('donasis/update/{id}', [DonationsController::class, 'update'])->name('donasis.update');
Route::post('donasis/{id}/donate', [DonationsController::class, 'donate'])->middleware(['auth', 'verified'])->name('donasis.donate');

require __DIR__.'/auth.php';
