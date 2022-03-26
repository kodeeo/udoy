@extends('admin.master')
@section('content')

<div class="card mt-3" style="display: flex; padding-bottom: 150px;">

    {{-- <div style="text-align:center;">
                <img style="border-radius: 8px; margin: 10px;" width="250px;" height="250px;" src=" {{url('/uploads/employee/'.$profile->employee_image)}}" alt="product">
    </div> --}}
                <div class="container" style="width: 60%; margin-top:30px;">
                    <p><b>Name: {{$show->name}}</b></p> <hr>
                    <p><b>Email: {{$show->email}}</b></p> <hr>
                    <p><b>Phone: {{$show->phone}}</b></p> <hr>
                    <p><b>Address: {{$show->address}}</b></p> <hr>
                    <p><b>City: {{$show->city}}</b></p> <hr>
                    <p><b>Country: {{$show->country}}</b></p> <hr>
                </div>

</div>


@endsection
