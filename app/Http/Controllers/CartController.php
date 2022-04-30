<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd(session()->all());   

        $key=request()->search;
        $products=Product::where('name','LIKE',"%{$key}%")->get();
        $categories = Category::all();
        $brands = Brand::all();

        return view('admin.pages.cart.index',compact('products','categories','brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session()->put('key','100');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addToCart(Product $product, Request $request)
    {
        //dd($product->id);
        $cart = session()->get('cart');
        // dd($cart);
        // $paid = session()->get('paid');
        // $paid = [
        //         'paid'=> $request->paid,
        //         ];
        //     session()->put('paid', $paid);
        
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
        // $paid = session()->get('paid');

        // $paid = [
        //         'paid'=> $request->paid,
        //         ];

        //     session()->put('paid', $paid);
        
        // dd(session()->get('paid'));
        return redirect()->back();
    }
}
