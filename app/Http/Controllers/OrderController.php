<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $products=Product::all();
        $categories=Category::all();
        $brands=Brand::all();
        return view('admin.pages.orders.index',compact('products','categories','brands'));
    }
}
