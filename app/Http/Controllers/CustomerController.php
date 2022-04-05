<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers=Customer::all();
        return view('admin.pages.customers.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.customers.create');
    }

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
        if($request->hasfile('image'))
          {
        $image_name=date('Ymdhis').'.'.$request->file('image')->getClientOriginalExtension();
        // dd($image_name);
        $request->file('image')->storeAs('/uploads/product',$image_name);
         }




        Customer::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'address'=>$request->address,
            'phone'=>$request->phone,
            'city'=>$request->city,
            'country'=>$request->country,
            'image'=>$request->$image_name,
           ]);

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
        $show=Customer::find($id);
        return view('admin.pages.customers.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=Customer::find($id);
        return view('admin.pages.customers.edit',compact('edit'));
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
        $edit=Customer::find($id);
        $edit->update([
            'name'=>$request->name,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'city'=>$request->city,
            'country'=>$request->country,
            'image'=>$request->image,
        ]);
        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customers=Customer::find($id)->delete();
        return redirect()->back();
    }
}
