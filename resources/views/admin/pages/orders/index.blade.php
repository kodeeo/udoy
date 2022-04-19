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
        <form action="{{route('order.index')}}" method="GET">
            <input name="search" class="search-input" type="text" placeholder="Product Name" aria-label="Search">
            <button style="background-color:rgb(39, 166, 168);" type="submit"><i class='fas fa-search'></i></button>
        </form>
        <br>
        
                <div class="row">
                    @foreach($products as $product) 
                        <div class="col-lg-3" style="margin:5px; width:25%; border-style: solid; border-color: #a5a5a5; border-radius: 10px; background: #27a6a8">
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
                        <th>Action</th>
                    </tr>
               </thead>

               <tbody>
                   @php
                        $total = 0;
                        $change = 0;
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
                        <td colspan="3"><strong>Total Amount</strong></td> 
                        <td>{{$total}}</td>

                        {{-- @dd(session()->all()) --}}
                   </tr>

                   @if(session('paid'))
                        @foreach (session('paid') as $paid)
                            <tr>
                                    <td colspan="3"><strong>Paid</strong></td> 
                                    <td>
                                        {{-- @dd($paid) --}}
                                        <form action="{{route('calculate')}}">
                                            @csrf
                                            <div>
                                                <input type="number" name="paid"  placeholder="{{$paid}}" style="width: 70px">
                                            </div>
                                        </form>
                                    </td>
                            </tr>
                        @endforeach
                   @endif

                            @if(session('paid') && session('cart'))
                                @foreach (session('paid') as $paid)
                   
                                    @php
                                        if ($paid ) 
                                            {
                                                $change = $paid - $total;
                                            } 
                                                else 

                                            {
                                                $change = 0;
                                            }
                                    @endphp
                                @endforeach
                            
                                    <tr>
                                        <td colspan="3"><strong>Change</strong></td> 
                                        <td>{{$change}}</td>
                                    </tr>
                            

                            @endif

                    {{-- @dd(session()->all()) --}}
               </tfoot>
           </table>
    </div>
    

</div>


@endsection
