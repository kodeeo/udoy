<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\OrderController;

class OrderController extends Controller
{
    public function index()
    {

        $key=request()->search;
        $products=Product::where('name','LIKE',"%{$key}%")->get();
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.pages.orders.index',compact('products','categories','brands'));
    }

    public function addToCart(Product $product)
    {
        //dd($product->id);
        $cart = session()->get('cart');
        // dd($cart);
        
        if(!$cart) 
        
            {
                $cart = [
                    $product->id=> [
                        'name' => $product->name,
                        'price' => $product->price,
                        'quantity' => 1,
                        'image' => $product->image
                    ]
                ];

                session()->put('cart', $cart);

                // dd($cart);
                return redirect()->back();
            }

        if(isset($cart[$product->id]))
            {
                $cart[$product->id]['quantity']++;
                session()->put('cart', $cart);
                //dd($cart);
                return redirect()->back();
            }
            

        $cart[$product->id] = [
                        'name' => $product->name,
                        'price' => $product->price,
                        'quantity' => 1,
                        'image' => $product->image
            ];

            session()->put('cart', $cart);
            return redirect()->back();
    }

    public function removeFromCart($id)
    {
        $cart = session()->get('cart');
        //dd($paid);

        if (isset($cart[$id]))
        {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->back();
    }

    public function calculate(Request $request)
    {
        $paid = session()->get('paid');
        
        $request->session()->regenerate();

        $paid = [
                'paid'=> $request->paid,
                ];

            session()->put('paid', $paid);
        
        // dd(session()->get('paid'));

        return redirect()->back();
    }

    
}
