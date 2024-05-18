<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WhishlistController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\UsersController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'about'])->name('aboutus');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contactus');
Route::get('/sitemap', [HomeController::class, 'sitemap'])->name('sitemap');
Route::get('/grid', [HomeController::class, 'grid'])->name('grid');
Route::get('/list', [HomeController::class, 'list'])->name('list');
Route::get('/compare', [HomeController::class, 'compare'])->name('compare');
Route::get('/quick-view', [HomeController::class, 'quickview'])->name('quick.view');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/newsletter', [HomeController::class, 'newsletter'])->name('newsletter');
Route::get('/404', [HomeController::class, 'notfound'])->name('404');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/single', [BlogController::class, 'detail'])->name('blog.single');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/whishlist', [WhishlistController::class, 'index'])->name('users.whishlist');
Route::get('/product/detail', [ProductController::class, 'detail'])->name('product.details');
Route::get('/shopping/cart', [ShoppingCartController::class, 'cart'])->name('"shopping.cart"');
Route::get('/users/dashboard', [UsersController::class, 'dashboard'])->name('{users.dashboard}');
Route::get('/users/addresses', [UsersController::class, 'addresses'])->name('{""users.addresses""}');



