<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

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


Route::get('hotel/create', [HotelController::class, 'create'])->name('hotel.create');
Route::post('hotel', [HotelController::class, 'store'])->name('hotel.store');
Route::get('hotel', [HotelController::class, 'index'])->name('hotel.index');


