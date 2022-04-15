@extends('admin.master')
@section('content')


@if(session()->has('success'))
<p class="alert alert-success">
    {{session()->get('success')}}
</p>
@endif

<div class="card" style="display: flex;">

    <div class="card" style="text-align:center; width:55%">
        <h2>Add To Cart</h2>
        <hr>
        
                <div class="row">
                    @foreach($products as $product) 
                        <div class="col-lg-3" style="margin:5px; width:20%; border-style: solid; border-color: #a5a5a5; border-radius: 10px; background: #27a6a8">
                                <img src="{{url('/uploads/product/'.$product->image)}}" width="100px" alt="Image" style="border-radius: 8%;">
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li><b>{{$product->name}}</b></li>
                                    <li><b>BDT: {{$product->price}}</b></li>
                                    {{-- <li>{{$product->categories->name}}</li>
                                    <li>{{$product->brands->name}}</li> --}}
                                    <a href="{{route('addToCart', [$product->id])}}" class="btn btn-sm btn-success">Add</a>
                                </ul>
                        </div>
                    @endforeach
                </div>   
    </div>

    <div class="card"  style="width:45%; text-align:center;">
        <h2>Cart</h2>
        <hr>
           <table class="table table-bordered">
               <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Qty.</th>
                        <th>Subtotal</th>
                    </tr>
               </thead>

               <tbody>
                   @php
                        $total = 0;
                   @endphp

                   @if(session('cart'))
                        @foreach (session('cart') as $id => $product)
                        {{-- @dd(session()->all()) --}}

                        @php
                            
                            $subtotal = $product['price'] * $product['quantity'];
                            $total += $subtotal;
                        @endphp

                        <tr>
                            <td>
                                <img src="{{url('/uploads/product/'.$product['image'])}}" width="80px;" alt="{{$product['name']}}">
                            </td>
                            <td>{{$product['price']}}</td>
                            <td>{{$product['quantity']}}</td>
                            <td>{{$subtotal}}</td>
                            <td>
                                <a href="{{route('remove', [$id])}}" class="btn btn-sm btn-danger">X</a>
                            </td>
                        </tr>
                        @endforeach
                    @endif
                   
               </tbody>
               <tfoot>
                   <tr>
                        {{-- <td>
                            <a href="#" class="btn btn-success">Continue Shopping</a>
                        </td> --}}
                        <td colspan="3"><strong>Total Price</strong></td> 
                       <td>{{$total}}</td>
                   </tr>
               </tfoot>
           </table>
    </div>
    

</div>


@endsection
