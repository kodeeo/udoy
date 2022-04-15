@extends('admin.master')
@section('content')

<div style="text-align:center; margin:3%;">
    <h2><b>{{$show->name}}</b></h2>
    <hr>
</div>

<div class="card mt-3" style="display: flex;">

        <div class="card" style="width:40%; margin:10px;">
            <img style="border-radius: 8px; margin: 10px;" width="250px;" height="250px;" src= "{{url('/uploads/product/'.$show->image)}}" class="card-img-top" alt="ProductImage">
        </div>

        
        <div class="card" style="width: 40%; margin-top:4%;">
            <p><b><h4>Name:</b> {{$show->name}}</h4></p> 
            <p><b><h4>Category:</b> {{$show->categories->name}}</h4></p> 
            <p><b><h4>Price:</b> {{$show->price}}</h4></p> 
            <p><b><h4>Quantity:</b> {{$show->quantity}}</h4></p> 
            <p><b><h4>Details:</b> {{$show->details}}</h4></p> 
        </div>
</div>


@endsection
