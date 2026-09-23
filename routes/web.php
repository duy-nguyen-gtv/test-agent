<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('register', [RegisteredUserController::class, 'store'])->name('register.store');

Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('login.store');

Route::get('contacts', [ContactController::class, 'create'])->name('contacts');
Route::post('contacts', [ContactController::class, 'store'])->name('contacts.store');
