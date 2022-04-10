<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands=Brand::all();
        return view('admin.pages.brands.index',compact('brands'));
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
        $image_name=null;
        if($request->hasfile('brand_image'))
        {
            $image_name=date('Ymdhis').'.'.$request->file('brand_image')->getClientOriginalExtension();
            // dd($image_name);
            $request->file('brand_image')->storeAs('/uploads/brand',$image_name);
    
        }
        Brand::create([
            'name'=>$request->brand_name,
            'image'=>$image_name,
            'details'=>$request->brand_details,
           ]);

        //    return 'ok';

    return redirect()->back()->with('success','Brand created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show=Brand::find($id);
        return view('admin.pages.brands.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=Brand::find($id);
        return view('admin.pages.brands.edit',compact('edit'));
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
        $edit=Brand::find($id);
        
        $image_name=$edit->image;
        //              step 1: check image exist in this request.
        if($request->hasfile('brand_image'))
        {
            $image_name=date('Ymdhis').'.'.$request->file('brand_image')->getClientOriginalExtension();
            // dd($image_name);
            $request->file('brand_image')->storeAs('/uploads/brand',$image_name);
    
        }

        $edit->update([
            'name'=>$request->name,
            'details'=>$request->details,
            'image'=>$image_name,
        ]);
        return redirect()->route('brands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brands=Brand::find($id)->delete();
        return redirect()->back();
    }
}
