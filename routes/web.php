<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BrandController;

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
Route::get('/brand/index',[BrandController::class,'index'])->name('brand.index');
Route::post('/brand/store',[BrandController::class,'store'])->name('brand.store');
Route::get('/brand/view',[BrandController::class,'show'])->name('brand.view');
Route::get('/brand/edit',[BrandController::class,'edit'])->name('brand.edit');
Route::put('/brand/update',[BrandController::class,'update'])->name('brand.update');
Route::get('/delete/brand/{id}',[BrandController::class,'destroy'])->name('brand.delete');

//cateogory
Route::get('/add/category/',[CategoryController::class,'create'])->name('category.add');
Route::get('/list/category/',[CategoryController::class,'index'])->name('category.index');
Route::post('/store/category/',[CategoryController::class,'store'])->name('category.store');
Route::get('/edit/category/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::put('/update/category/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('/delete/category/{id}',[CategoryController::class,'destroy'])->name('category.delete');


//customers
Route::get('/list/customers/',[CustomerController::class,'index'])->name('customers.index');
Route::get('/add/customers/',[CustomerController::class,'create'])->name('customers.create');
Route::post('/store/customers/',[CustomerController::class,'store'])->name('customers.store');
Route::get('/show/customers/{id}',[CustomerController::class,'show'])->name('customers.show');
Route::get('/edit/customers/{id}',[CustomerController::class,'edit'])->name('customers.edit');
Route::put('/update/customers/{id}',[CustomerController::class,'update'])->name('customers.update');
Route::get('/delete/customers/{id}',[CustomerController::class,'destroy'])->name('customers.delete');

//orders
Route::get('/order/view',[OrderController::class,'index'])->name('order.view');