@extends('admin.master')
@section('content')

<div class="card mt-3" style="display: flex; padding-bottom: 150px;">

    {{-- <div style="text-align:center;">
                <img style="border-radius: 8px; margin: 10px;" width="250px;" height="250px;" src=" {{url('/uploads/employee/'.$profile->employee_image)}}" alt="product">
    </div> --}}
                <div class="container" style="width: 60%; margin-top:30px;">

                    <td><img src="{{url('/uploads/product/'.$show->image)}}" style="border-radius:4px" width="500px" alt="product image"></td>

                    <p><b><h4>Name:</b> {{$show->name}}</h4></p> <hr>
                    <p><b><h4>Brand:</b> {{$show->brands->name}}</h4></p> <hr>
                    <p><b><h4>Category:</b> {{$show->categories->name}}</h4></p> <hr>
                    <p><b><h4>Price:</b> {{$show->price}}</h4></p> <hr>
                    <p><b><h4>Quantity:</b> {{$show->quantity}}</h4></b></p> <hr>
                </div>

</div>


@endsection
