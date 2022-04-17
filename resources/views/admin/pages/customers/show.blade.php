@extends('admin.master')
@section('content')

<div style="text-align:center; margin:3%;">
    <h2><b>{{$show->name}}'s Profile</b></h2>
    <hr>
</div>
                <div class="card" style="display:flex;">

                        <div class="card" style="width:40%; margin:10px;">
                            <img src="{{url('/uploads/customers/'.$show->image)}}" style="border-radius:4px" width="300px" alt="customer image">
                        </div>

                        <div class="card" style="width: 40%; margin-top:10px;">
                            <p><b><h4>Name:</b> {{$show->name}}</h4></p>
                            <p><b><h4>Email:</b> {{$show->email}}</h4></p> 
                            <p><b><h4>Phone:</b> {{$show->phone}}</h4></p> 
                            <p><b><h4>Address:</b> {{$show->address}}</h4></p> 
                            <p><b><h4>City:</b> {{$show->city}}</h4></b></p> 
                            <p><b><h4>Country:</b> {{$show->country}}</h4></p> 
                        </div>
                   
                </div>

@endsection
