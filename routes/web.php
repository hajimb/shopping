<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WhishlistController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::get('/about-us', [HomeController::class, 'about'])->name('aboutus');
Route::get('/sitemap', [HomeController::class, 'sitemap'])->name('sitemap');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/single', [BlogController::class, 'detail'])->name('blog.single');
Route::get('/grid', [HomeController::class, 'grid'])->name('grid');
Route::get('/list', [HomeController::class, 'list'])->name('list');
Route::get('/whishlist', [WhishlistController::class, 'index'])->name('users.whishlist');
Route::get('/product/detail', [ProductController::class, 'detail'])->name('product.details');



