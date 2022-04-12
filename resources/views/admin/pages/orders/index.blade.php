@extends('admin.master')
@section('content')


@if(session()->has('success'))
<p class="alert alert-success">
    {{session()->get('success')}}
</p>
@endif

<div class="row" style="display: flex; text-align:center;">
    <div style="width:60%;">

        <h2>Add Products To Cart</h2>
                <div style="display: flex;">
                    @foreach($products as $product) 
                    
                        <div class="card" style="border-style: solid; border-color: black; border-radius: 10px;">
                            
                                <img src="{{url('/uploads/product/'.$product->image)}}" width="100px" alt="Image">
                                <ul class="list-unstyled mt-3 mb-4">
                                <li>{{$product->name}}</li>
                                <li>{{$product->categories->name}}</li>
                                <li>{{$product->brands->name}}</li>
                                <a href="{{route('add.cart',$product->id)}}" class="btn btn-success">Add</a>
                                </ul>
                            
                        </div>
                        
                    @endforeach

                </div>   
    </div>

    <div style="width:40%; text-align:center;">
        <h1>CART</h1>

                <div class="card">
                    <h2>Body</h2>
                </div>

    </div>
    

</div>


@endsection
