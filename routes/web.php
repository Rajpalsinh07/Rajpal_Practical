<?php

use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Email verification routes
Route::get('/email/verify', function () {
    return view('auth.verify');
})->name('verification.notice');

Route::post('/email/verify', [VerificationController::class, 'verify'])
    ->name('verification.verify');

// Protected routes that require verification
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/welcome', function () {
        return view('home');
    })->name('welcome');

});
