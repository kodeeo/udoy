@extends('admin.master')
@section('content')


@if(session()->has('success'))
<p class="alert alert-success">
    {{session()->get('success')}}
</p>
@endif

<h2>Add Products To Cart</h2>
<div class="row" style="display: flex;">
    
                @foreach($products as $product) 
                        <div class="col">
                            <div class="card" style="margin:7px; border-style: solid; border-color: black; border-radius: 10px;">
                                
                                    <img src="{{url('/uploads/product/'.$product->image)}}" width="100px" alt="Image">
                                    <ul class="list-unstyled mt-3 mb-4">
                                    <li>{{$product->name}}</li>
                                    <li>{{$product->category->name}}</li>
                                    <li>{{$product->brands->name}}</li>
                                    </ul>
                                
                            </div>
                        </div>    
                @endforeach
</div>

@endsection
