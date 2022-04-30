<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;

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



Route::get('/admin/login',[UserController::class,'login'])->name('admin.login');
Route::post('/admin/do/login',[UserController::class,'doLogin'])->name('admin.do.login');
Route::get('/admin/registration',[UserController::class,'registration'])->name('admin.registration');
Route::post('/admin/do/registration',[UserController::class,'registrationstore'])->name('admin.registration.store');
Route::get('/admin/logout',[UserController::class,'logout'])->name('admin.logout');

Route::group(['prefix'=>'/','middleware'=>'auth'], function (){


Route::view('/','admin.master')->name('admin.master');


//product
Route::resource('products', ProductController::class);

//brand
Route::resource('brands', BrandController::class);

//cateogory
Route::resource('category', CategoryController::class);

//customers
Route::resource('customers', CustomerController::class);

//orders
Route::resource('orders', OrderController::class);
Route::get('order/clear', [OrderController::class, 'orderClear'])->name('order.clear');

//add to cart
Route::resource('cart', CartController::class);

Route::get('add/cart/{product}', [CartController::class, 'addToCart'])->name('addToCart');
Route::get('remove/cart/{id}', [CartController::class, 'removeFromCart'])->name('remove');

//barcode
Route::resource('barcodes', BarcodeController::class);

Route::get('calculate/', [CartController::class, 'calculate'])->name('calculate');

//
Route::get('language/{local}',[BarcodeController::class, 'changeLanguage'])->name('language');
Route::post('barcodes/clear',[BarcodeController::class, 'clearBarcodes'])->name('clear');

});

