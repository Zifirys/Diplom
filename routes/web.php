<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\OrderController;



Route::get('/', [ProductController::class, 'index'])->name('product');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login.store');

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');

Route::get('basket', [BasketController::class, 'index'])->name('basket');
Route::get('basket/add/{id}', [BasketController::class, 'addToBasket'])->name('addTobasket');
Route::get('basket/table/{id}', [BasketController::class, 'deleteBasket'])->name('basket.delete');

Route::get('order/form', [OrderController::class, 'index'])->name('orderForm');
Route::post('order/form/store', [OrderController::class, 'store'])->name('orderForm.store');




Route::prefix('user')->middleware('auth')->group(function(){

	Route::get('logout', LogoutController::class)->name('logout');

});




Route::prefix('admin')->middleware('auth', 'admin')->group(function(){

	Route::get('product/create', [ProductController::class, 'createNew'])->name('add');
	Route::post('product/create/store', [ProductController::class, 'storeNew'])->name('add.store');
	Route::get('product/{id}', [ProductController::class, 'delete'])->name('product.delete');
});



