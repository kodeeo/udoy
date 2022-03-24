<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

Route::get('/add/category/',[CategoryController::class,'create'])->name('category.add');
Route::get('/list/category/',[CategoryController::class,'index'])->name('category.index');
Route::post('/store/category/',[CategoryController::class,'store'])->name('category.store');
Route::get('/edit/category/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::put('/update/category/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('/delete/category/{id}',[CategoryController::class,'destroy'])->name('category.delete');
