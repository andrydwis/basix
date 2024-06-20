<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

require __DIR__ . '/auth.php';

Route::prefix('core')->name('core.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', [\App\Http\Controllers\Web\Core\Dashboard\DashboardController::class, 'index'])->name('dashboard.index');

    Route::resource('users', \App\Http\Controllers\Web\Core\User\UserController::class);

    Route::get('profile/edit', [\App\Http\Controllers\Web\Core\Profile\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile/update', [\App\Http\Controllers\Web\Core\Profile\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('profile/destroy', [\App\Http\Controllers\Web\Core\Profile\ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::view('input', 'core.input')->name('input');
});