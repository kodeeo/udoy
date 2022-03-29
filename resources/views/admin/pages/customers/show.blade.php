@extends('admin.master')
@section('content')

<div class="card mt-3" style="display: flex; padding-bottom: 150px;">

    {{-- <div style="text-align:center;">
                <img style="border-radius: 8px; margin: 10px;" width="250px;" height="250px;" src=" {{url('/uploads/employee/'.$profile->employee_image)}}" alt="product">
    </div> --}}
                <div class="container" style="width: 60%; margin-top:30px;">
                    <p><b><h4>Name:</b> {{$show->name}}</h4></p> <hr>
                    <p><b><h4>Email:</b> {{$show->email}}</h4></p> <hr>
                    <p><b><h4>Phone:</b> {{$show->phone}}</h4></p> <hr>
                    <p><b><h4>Address:</b> {{$show->address}}</h4></p> <hr>
                    <p><b><h4>City:</b> {{$show->city}}</h4></b></p> <hr>
                    <p><b><h4>Country:</b> {{$show->country}}</h4></p> <hr>
                </div>

</div>


@endsection
