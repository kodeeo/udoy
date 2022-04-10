<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\OrderController;
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

Route::get('/', function () {
    return view('admin.master');
});


//product

Route::get('/product/view',[ProductController::class,'index'])->name('product.view');
Route::get('/products/add',[ProductController::class,'create'])->name('product.create');
Route::post('/product/store',[ProductController::class,'store'])->name('product.store');
Route::get('/delete/product/{id}',[ProductController::class,'destroy'])->name('product.delete');
Route::get('/edit/product/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::put('/update/product/{id}',[ProductController::class,'update'])->name('product.update');



//brand

Route::resource('brands', BrandController::class);

Route::get('/brand/index',[BrandController::class,'index'])->name('brand.index');
Route::post('/brand/store',[BrandController::class,'store'])->name('brand.store');
Route::get('/brand/view',[BrandController::class,'show'])->name('brand.view');
Route::get('/brand/edit',[BrandController::class,'edit'])->name('brand.edit');
Route::put('/brand/update',[BrandController::class,'update'])->name('brand.update');
Route::get('/delete/brand/{id}',[BrandController::class,'destroy'])->name('brand.delete');



//cateogory
Route::resource('category', CategoryController::class);

//customers
Route::resource('customers', CustomerController::class);

//orders
Route::get('orders/list', [OrderController::class, 'index'])->name('order.index');

