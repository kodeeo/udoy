@extends('admin.master')
@section('content')

<div class="card mt-3" style="display: flex; padding-bottom: 150px;">

     <div style="text-align:center;">

                <img style="border-radius: 8px; margin: 10px;" width="250px;" height="250px;" src= "{{url('/uploads/product/'.$show->image)}}" class="card-img-top" alt="ProductImage">
    </div>
                <div class="container" style="width: 60%; margin-top:30px;">
                    <p><b><h4>Name:</b> {{$show->name}}</h4></p> <hr>
                    <p><b><h4>Category:</b> {{$show->category->name}}</h4></p> <hr>
                    <p><b><h4>Price:</b> {{$show->price}}</h4></p> <hr>
                    <p><b><h4>Quantity:</b> {{$show->quantity}}</h4></p> <hr>
                </div>

</div>


@endsection
