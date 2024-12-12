<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;
Route::get('/', function () {
    return view('index');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/account',[AuthController::class,'account'])->middleware('auth')->name('account');


Route::get('/wishlist', [AuthController::class, 'login'])->name('wishlist');

Route::get('/cart', [AuthController::class, 'login'])->name('cart');
Route::get('/checkout', [AuthController::class, 'login'])->name('checkout');

// Products
Route::get('/', [AuthController::class, 'products']);


// routes/web.php
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('cart.add');



