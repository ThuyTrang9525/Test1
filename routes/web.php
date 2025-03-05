<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'getIndex'])->name('homepage');
Route::get('shop', [PageController::class, 'getShop'])->name('shop');
Route::get('product-detail', [PageController::class, 'getProductDetail'])->name('product-detail');
Route::get('login', [PageController::class, 'getLogin'])->name('login');
Route::get('contact', [PageController::class, 'getContact'])->name('contact');
Route::get('checkout', [PageController::class, 'getCheckout'])->name('checkout');
Route::get('cart', [PageController::class, 'getCart'])->name('cart');
Route::get('blog', [PageController::class, 'getBlog'])->name('blog');
Route::get('blog-single', [PageController::class, 'getBlogSingle'])->name('blog-single');
Route::get('error', [PageController::class, 'getError'])->name('error');

