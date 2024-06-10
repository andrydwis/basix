<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

require __DIR__ . '/auth.php';

Route::prefix('core')->name('core.')->middleware(['auth'])->group(function () {
    Route::get('dashboard', [\App\Http\Controllers\Web\Core\Dashboard\DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('users', \App\Http\Controllers\Web\Core\User\UserController::class);
});