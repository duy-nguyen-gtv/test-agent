<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('tos', function () {
    return view('tos');
})->name('tos');

Route::get('poc', function () {
    return view('poc');
})->name('poc');

Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('register', [RegisteredUserController::class, 'store'])->name('register.store');

Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('login.store');

Route::get('contacts', [ContactController::class, 'create'])->name('contacts');
Route::post('contacts', [ContactController::class, 'store'])->name('contacts.store');

Route::get('products', [ProductController::class, 'index'])->name('products');

Route::get('teams-at-scale', function () {
    return view('teams-at-scale');
})->name('teams-at-scale');

Route::get('posts', function () {
    return view('posts', [
        'post' => [
            'title' => 'Building Faster with Laravel',
            'author' => 'Jane Doe',
            'published_at' => 'September 24, 2026',
            'content' => [
                'Laravel keeps getting better at helping teams ship features quickly without sacrificing code quality.',
                'In this post we walk through a few patterns that have helped our team stay productive: thin controllers, expressive Eloquent models, and a healthy test suite.',
                'The result is an application that is easy to reason about and a joy to work in, even as it grows.',
            ],
        ],
    ]);
})->name('posts');
