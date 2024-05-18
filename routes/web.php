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
use App\Http\Controllers\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PagesController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'about'])->name('aboutus');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contactus');
Route::get('/sitemap', [HomeController::class, 'sitemap'])->name('sitemap');
Route::get('/grid', [HomeController::class, 'grid'])->name('grid');
Route::get('/list', [HomeController::class, 'list'])->name('list');
Route::get('/compare', [HomeController::class, 'compare'])->name('compare');
Route::get('/quick-view', [HomeController::class, 'quickview'])->name("quick.view");

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
Route::get('/shopping/cart', [ShoppingCartController::class, 'cart'])->name('shopping.cart');
Route::get('/users/dashboard', [UsersController::class, 'dashboard'])->name('users.dashboard');
Route::get('/users/addresses', [UsersController::class, 'addresses'])->name('users.addresses');


Route::prefix('admin')->group(function () {
    Route::get('/', [AdminLoginController::class, 'index'])->name('admin.login');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/dashboard2', [DashboardController::class, 'dashboard2'])->name('admin.dashboard2');
    Route::get('/pages/starter', [PagesController::class, 'starter'])->name('admin.pages.starter');
    Route::get('/pages/register', [PagesController::class, 'register'])->name('admin.register');
    Route::get('/pages/logout', [PagesController::class, 'logout'])->name('admin.logout');
    Route::get('/pages/password-reset', [PagesController::class, 'passwordReset'])->name('admin.password.reset');
    Route::get('/pages/lock', [PagesController::class, 'lock'])->name('admin.lock');
    Route::get('/pages/404', [PagesController::class, 'notfound'])->name('admin.404');
    Route::get('/pages/500', [PagesController::class, 'internalError'])->name('admin.500');
    Route::get('/pages/company', [PagesController::class, 'company'])->name('admin.company');
    Route::get('/pages/members', [PagesController::class, 'members'])->name('admin.members');
    Route::get('/pages/maintainance', [PagesController::class, 'maintainance'])->name('admin.maintainance');
    Route::get('/pages/calander', [PagesController::class, 'calander'])->name('admin.calander');
    Route::get('/pages/tickets', [PagesController::class, 'tickets'])->name('admin.tickets');


});


