<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $products=Product::all();
     return view('admin.pages.product.list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('admin.pages.product.create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         //dd($request->all());
         //Image
        // dd(date('Ymdhms'));
        $image_name=null;
    if($request->hasfile('product_image'))
    {
        $image_name=date('Ymdhis').'.'.$request->file('product_image')->getClientOriginalExtension();
        // dd($image_name);
        $request->file('product_image')->storeAs('/uploads/product',$image_name);

    }

    Product::create([
                    'name'=>$request->name,
                    'image'=>$image_name,
                    'category_id'=>$request->category,
                    'price'=>$request->price,
                    'quantity'=>$request->quantity,
                    'details'=>$request->details,
                   ]);

                //    return 'ok';
        
            return redirect()->back()->with('success','Product created successfully.');

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
        $products=Product::find($id)->delete();
        return redirect()->back();
    }
}


  //  Product::create([
        //             'name'=>$request->name,
        //             'image'=>$image_name,
        //             'category_id'=>$request->category,
        //             'price'=>$request->price,
        //             'quantity'=>$request->quantity,
        //             'details'=>$request->details,
        //            ]);

        //         //    return 'ok';
        
        //     return redirect()->back()->with('success','Product created successfully.');