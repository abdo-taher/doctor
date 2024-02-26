<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('guest')->group(function () {
    Route::view('login','login')->name('login');
    Route::post('login-check', [\App\Http\Controllers\Auth\LoginController::class, 'checkup'])->name('login-check');
    Route::view('sign', 'signup')->name('sign');
    Route::post('sign-check', [\App\Http\Controllers\Auth\RegisterController::class, 'store'])->name('sign-check');
});

    Route::view('/', 'index')->name('index');
    Route::post('/', [\App\Http\Controllers\ContactFormController::class, 'store'])->name('contact-form');

Route::middleware('auth:web')->group(function () {
    Route::get('logOut', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
});
