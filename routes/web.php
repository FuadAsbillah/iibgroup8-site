<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\JoinController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Culture
Route::get('/culture', function () {
    return view('culture');
})->name('culture');

// Parts
Route::get('/parts', function () {
    return view('parts');
})->name('parts');

// Order
Route::get('/order', [OrderController::class, 'create'])
    ->name('orders.create');

Route::post('/order', [OrderController::class, 'store'])
    ->name('orders.store');

// Gallery
Route::view('/gallery', 'gallery')->name('gallery');

// Join Us
Route::get('/join', [JoinController::class, 'create'])
    ->name('join.create');

Route::post('/join', [JoinController::class, 'store'])
    ->name('join.store');
