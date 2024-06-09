<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::prefix('core')->name('core.')->middleware(['auth'])->group(function () {
    Route::get('dashboard', [\App\Http\Controllers\Web\Core\Dashboard\DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('users', \App\Http\Controllers\Web\Core\User\UserController::class);
});