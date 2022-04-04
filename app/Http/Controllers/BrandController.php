<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $brands=Brand::all();
        return view('admin.pages.brand.list',compact('brands'));
    }

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

    public function destroy($id)
    {
        $brands=Brand::find($id)->delete();
        return redirect()->back();
    }
}
