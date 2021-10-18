<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index']);
Route::get('/search', [HomeController::class,'searchBook'])->name('home.search');

Auth::routes();

Route::resource('dashboard/book', BookController::class);
Route::post('dashboard/book/{book}/picture', [BookController::class,'picture'])->name('book.picture');

Route::get('/cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('/cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('/update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/remove-cart', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('/clear-cart', [CartController::class, 'clearAllCart'])->name('cart.clear');
