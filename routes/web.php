<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
Route::get('/{book}', [HomeController::class,'show'])->name('home.show');

Route::get('/admin', [AdminController::class, 'adminPage'])->name('admin.site');

Route::get('/historial-compras', [CartController::class, 'compras'])->name('cart.compras');

Auth::routes();

Route::resource('/admin', AdminController::class)->except([
    'index','show','edit','update',
]);;

Route::resource('dashboard/book', BookController::class);
Route::post('dashboard/book/{shopping}/process',[BookController::class,'process'])->name('book.process');
Route::post('dashboard/book/{book}/picture', [BookController::class,'picture'])->name('book.picture');

Route::get('/cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('/cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('/update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/remove-cart', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('/clear-cart', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::post('/cart-pay', [CartController::class, 'payBooks'])->name('cart.pay');
