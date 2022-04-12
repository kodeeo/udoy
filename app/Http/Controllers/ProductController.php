<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
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
     $p_category=Category::all();
     $p_brand=Brand::all();

     return view('admin.pages.products.index',compact('products','p_category','p_brand'));

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
                    'categories_id'=>$request->category,
                    'brands_id'=>$request->brand,
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
        $show=Product::find($id);
        return view('admin.pages.products.show',compact('show'));  

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products=Product::find($id);
        //dd($products);
        $brands=Brand::all();
        $categories=Category::all();

        return view ('admin.pages.products.edit',compact('categories','products','brands'));
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
        
        $product=Product::find($id);
        // dd($request->all());
        
        $image_name=$product->image;
        //              step 1: check image exist in this request.
                if($request->hasFile('image'))
                {
                    // step 2: generate file name
                    $image_name=date('Ymdhis') .'.'. $request->file('image')->getClientOriginalExtension();
        
                    //step 3 : store into project directory
        
                    $request->file('image')->storeAs('/uploads/product',$image_name);
                }
                $product=Product::find($id);
                $product->update([
                    'name'=>$request->name,
                    'image'=>$image_name,
                    'categories_id'=>$request->category,
                    'brands_id'=>$request->brand,
                    'price'=>$request->price,
                    'quantity'=>$request->quantity,
                    'details'=>$request->details,
                ]);
                return redirect ()->route('products.index')->with('message','Product Updated');
               
                
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