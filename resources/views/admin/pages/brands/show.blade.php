@extends('admin.master')
@section('content')

<div class="card mt-3" style="display: flex; padding-bottom: 150px;">

    {{-- <div style="text-align:center;">
                <img style="border-radius: 8px; margin: 10px;" width="250px;" height="250px;" src=" {{url('/uploads/employee/'.$profile->employee_image)}}" alt="product">
    </div> --}}
                <div class="container" style="width: 60%; margin-top:30px;">

                    <td><img src="{{url('/uploads/brand/'.$show->image)}}" style="border-radius:4px" width="500px" alt="brand image"></td>

                    <p><b><h4>Name:</b> {{$show->name}}</h4></p> <hr>
                    <p><b><h4>Details:</b> {{$show->details}}</h4></p> <hr>
                </div>

</div>


@endsection
