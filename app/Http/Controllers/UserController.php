<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registration()
    {
        return view('admin.pages.user.reg');
    }

    public function registrationstore(Request $request){

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>bcrypt($request->password),
            'role'=>"user",
        ]);
        return redirect()->route('admin.login');
    }

    public function login()
    {
        return view('admin.pages.user.login');
    }

    public function doLogin(Request $request){
        // dd($request->all());
        $admin=$request->except('_token');
        // dd($admin);

        if(Auth::attempt($admin))
        {
            return redirect()->route('admin.home')->with('success','Login Successful');
        }
        else
        return redirect()->back()->withErrors('Invalid user credentials');

    }

    public function Logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('success','Logging out.');
    }

}