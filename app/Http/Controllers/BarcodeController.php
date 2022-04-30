<?php

namespace App\Http\Controllers;

use App\Models\Barcode;
use Milon\Barcode\DNS1D;
use Milon\Barcode\DNS2D;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class BarcodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barcodes=Barcode::all();
        //dd($barcodes);
        // $code = date('sms').mt_rand(10000,99999);
        
        return view('admin.pages.barcodes.index',compact('barcodes'));
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
        $string= rand(1000000,9000000);
        //$code= preg_replace('/[^0-9]/', '', $string);
        Barcode::insert([
            'barcode'=> $string
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

    public function changeLanguage($locale)
    {
        App::setLocale($locale);
        session()->put('applocale', $locale);
        // dd($locale);
        return redirect()->back();
    }

    public function clearBarcodes()
    {
        Barcode::truncate();
        return redirect()->back();
    }
}
