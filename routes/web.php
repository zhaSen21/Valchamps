<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/gallery', [App\Http\Controllers\HomeController::class, 'gallery'])->name('gallery');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/product', [App\Http\Controllers\HomeController::class, 'product'])->name('list.product');
Route::get('/product/{slug}', [App\Http\Controllers\HomeController::class, 'detail'])->name('detail');
Route::post('/product/{slug}', [App\Http\Controllers\HomeController::class, 'keranjang'])->name('keranjang')->middleware('auth');
Route::get('/cart', [App\Http\Controllers\HomeController::class, 'cart'])->name('cart')->middleware('auth');

Auth::routes();

// prefixs url, seluruh url mengandung awalan v1
// contoh http://127.0.0.1:8000/v1/product dan seterusnya
Route::prefix('v1')->middleware('role:admin')->group(function () {
   
    // dashboard 
    Route::get('', [App\Http\Controllers\Backend\IndexController::class, 'index'])->name('dashboard');

    // route product
    Route::resource('product', App\Http\Controllers\Backend\ProductController::class);

    // route users
    Route::resource('users', App\Http\Controllers\Backend\ProductController::class);

    // route orders
    Route::get('orderan', [App\Http\Controllers\Backend\OrderanController::class, 'index'])->name('orderan.index');

    // route reviews
    Route::get('review', [App\Http\Controllers\Backend\ReviewController::class, 'index'])->name('review.index');
});
