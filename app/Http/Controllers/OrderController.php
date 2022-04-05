<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\OrderController;

class OrderController extends Controller
{
    public function index()
    {
        $orders=Product::all();
        return view('admin.pages.orders.view');
    }
}
