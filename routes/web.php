<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LogoutController;


Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login.store');



Route::prefix('user')->middleware('auth')->group(function(){

	Route::get('home', [HomeController::class, 'index'])->name('home');

	Route::get('products', [ProductController::class, 'index'])->name('product');

	Route::get('orders', [OrderController::class, 'index'])->name('order');
	Route::get('order/add/{id}', [OrderController::class, 'addToOrder'])->name('addToOrder');
	Route::get('order/table/{id}', [OrderController::class, 'deleteOrder'])->name('order.delete');

	Route::get('logout', LogoutController::class)->name('logout');
});



Route::prefix('admin')->middleware('auth', 'admin')->group(function(){
	
	Route::get('register', [RegisterController::class, 'index'])->name('register');
	Route::post('register', [RegisterController::class, 'store'])->name('register.store');


	Route::get('homeAdmin', [HomeController::class, 'dop'])->name('home.admin');


	Route::get('product/create', [ProductController::class, 'createNew'])->name('add');
	Route::post('product/create/store', [ProductController::class, 'storeNew'])->name('add.store');
	Route::get('product/{id}', [ProductController::class, 'delete'])->name('product.delete');
});



