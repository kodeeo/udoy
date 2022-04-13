@extends('admin.master')
@section('content')

<div style="text-align:center; margin:3%;">
    <h2><b>{{$show->name}}</b></h2>
    <hr>
</div>
    
    <div class="card" style="display:flex;">
            <div class="card" style="width:40%; margin:10px;">
                <img src="{{url('/uploads/brand/'.$show->image)}}" style="border-radius:4px" width="300px" alt="brand image">
            </div>

            <div class="card" style="width: 40%; margin-top:10px;">
                    <p><b><h4>Name:</b> {{$show->name}}</h4></p>
                    <p><b><h4>Details:</b> {{$show->details}}</h4></p>
            </div>
    </div>


@endsection
