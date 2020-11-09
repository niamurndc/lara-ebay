<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FrontPageController;
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

Route::get('/', [FrontPageController::class, 'index']);
Route::get('/shop', [FrontPageController::class, 'shop']);
Route::get('/search', [FrontPageController::class, 'search']);
Route::get('/product/{id}', [FrontPageController::class, 'single']);
Route::get('/add-cart/{id}', [FrontPageController::class, 'addcart']);

// customer Controller
Route::get('/checkout', [CustomerController::class, 'checkout']);
Route::get('/profile', [CustomerController::class, 'profile']);
Route::post('/profile/edit', [CustomerController::class, 'editprofile']);
Route::get('/home', [CustomerController::class, 'order']);
Route::post('/order', [CustomerController::class, 'addorder']);

// cart
Route::get('/cart', [CartController::class, 'index']);
Route::get('/cart/delete/{id}', [CartController::class, 'delete']);
Route::post('/cart/edit/{id}', [CartController::class, 'update']);

Route::get('/admin/login', function () {
    return view('admin.login');
})->name('adminlogin');

Auth::routes();


Route::post('/admin/login', [App\Http\Controllers\AdminController::class, 'login'])->name('admin.auth');

// admin page controller
Route::get('/admin', [AdminPageController::class, 'index']);
Route::get('/admin/product', [AdminPageController::class, 'product']);
Route::get('/admin/order', [AdminPageController::class, 'order']);
Route::get('/admin/category', [AdminPageController::class, 'category']);
Route::get('/admin/brand', [AdminPageController::class, 'brand']);
Route::get('/admin/customer', [AdminPageController::class, 'customer']);
Route::get('/admin/delete/user/{id}', [AdminPageController::class, 'delcustomer']);
Route::get('/admin/setting', [AdminPageController::class, 'setting']);
Route::get('/admin/profile', [AdminPageController::class, 'profile']);
Route::get('/admin/logout', [App\Http\Controllers\AdminController::class, 'logout']);


// operation controller for admin
// category
Route::post('/admin/add/category', [App\Http\Controllers\CategoryController::class, 'store']);
Route::get('/admin/edit/cat/{id}', [App\Http\Controllers\CategoryController::class, 'edit']);
Route::post('/admin/edit/cat/{id}', [App\Http\Controllers\CategoryController::class, 'update']);
Route::get('/admin/delete/cat/{id}', [App\Http\Controllers\CategoryController::class, 'delete']);

// brand
Route::post('/admin/add/brand', [App\Http\Controllers\BrandController::class, 'store']);
Route::get('/admin/edit/brand/{id}', [App\Http\Controllers\BrandController::class, 'edit']);
Route::post('/admin/edit/brand/{id}', [App\Http\Controllers\BrandController::class, 'update']);
Route::get('/admin/delete/brand/{id}', [App\Http\Controllers\BrandController::class, 'delete']);

// product
Route::get('/admin/add_product', [App\Http\Controllers\ProductController::class, 'add']);
Route::post('/admin/add/product', [App\Http\Controllers\ProductController::class, 'store']);
Route::get('/admin/edit/product/{id}', [App\Http\Controllers\ProductController::class, 'edit']);
Route::post('/admin/edit/product/{id}', [App\Http\Controllers\ProductController::class, 'update']);
Route::get('/admin/delete/product/{id}', [App\Http\Controllers\ProductController::class, 'delete']);

// order
Route::get('/admin/view/order/{id}', [App\Http\Controllers\OrderController::class, 'view'])->middleware('admin');
Route::get('/admin/delete/order/{id}', [App\Http\Controllers\OrderController::class, 'delete'])->middleware('admin');

// edit Profile
Route::post('/admin/edit/profile/{id}', [App\Http\Controllers\AdminController::class, 'update'])->middleware('admin');