@extends('admin.master')
@section('content')



@if(session()->has('success'))
<p class="alert alert-success">
    {{session()->get('success')}}
</p>
@endif

{{-- @dd(session()->all()) --}}

<div class="card" style="display: flex;">
    {{-- @dd(session('money')) --}}
    @if(session()->has('key'))



    <div class="card" style="text-align:center; width:55%">
        <h2>Calculate</h2>
        <hr>
        <br>  

        <head>
	<script>
		//function that display value
		function dis(val)
		{
			document.getElementById("result").value+=val
		}
		
		//function that evaluates the digit and return result
		function solve()
		{
			let x = document.getElementById("result").value
			let y = eval(x)
			document.getElementById("result").value = y
		}
		
		//function that clear the display
		function clr()
		{
			document.getElementById("result").value = ""
		}
	</script>
	<!-- for styling -->
	<style>
		.title{
		margin-bottom: 10px;
		text-align:center;
		width: 210px;
		color:green;
		border: solid black 2px;
		}

		input[type="button"]
		{
		background-color:green;
		color: black;
        
		width:100%
		}

		input[type="text"]
		{
		background-color:white;
		border: solid black 2px;
		width:100%
		}
	</style>
</head>
<!-- create table -->
<body>
	<table border="1">
		<tr>
			<td colspan="3"><input type="text" id="result"/></td>
			<!-- clr() function will call clr to clear all value -->
			<td><input type="button" value="c" onclick="clr()"/> </td>
		</tr>
		<tr>
			<!-- create button and assign value to each button -->
			<!-- dis("1") will call function dis to display value -->
			<td><input type="button" value="1" onclick="dis('1')"/> </td>
			<td><input type="button" value="2" onclick="dis('2')"/> </td>
			<td><input type="button" value="3" onclick="dis('3')"/> </td>
			<td><input type="button" value="/" onclick="dis('/')"/> </td>
		</tr>
		<tr>
			<td><input type="button" value="4" onclick="dis('4')"/> </td>
			<td><input type="button" value="5" onclick="dis('5')"/> </td>
			<td><input type="button" value="6" onclick="dis('6')"/> </td>
			<td><input type="button" value="-" onclick="dis('-')"/> </td>
		</tr>
		<tr>
			<td><input type="button" value="7" onclick="dis('7')"/> </td>
			<td><input type="button" value="8" onclick="dis('8')"/> </td>
			<td><input type="button" value="9" onclick="dis('9')"/> </td>
			<td><input type="button" value="+" onclick="dis('+')"/> </td>
		</tr>
		<tr>
			<td><input type="button" value="." onclick="dis('.')"/> </td>
			<td><input type="button" value="0" onclick="dis('0')"/> </td>
			<!-- solve function call function solve to evaluate value -->
			<td><input type="button" value="=" onclick="solve()"/> </td>
			<td><input type="button" value="*" onclick="dis('*')"/> </td>
		</tr>
	</table>

    
    </div>




   

        

    @else

    <div class="card" style="text-align:center; width:55%">
        <h2>{{__("Add To Cart")}}</h2>
        <hr>
        <form action="{{route('cart.index')}}" method="GET">
            <input name="search" class="search-input" type="text" placeholder="{{__("Product Name")}}" aria-label="Search">
            <button style="background-color:rgb(39, 166, 168);" type="submit"><i class='fas fa-search'></i></button>
        </form>
        <br>    
        
                <div class="row">
                    @foreach($products as $product) 
                    <a href="{{route('addToCart', [$product->id])}}">
                        <div class="col-lg-3" style="margin:5px; width:25%; border-style: solid; border-color: #a5a5a5; border-radius: 10px; background: #27a6a8">
                                <img src="{{url('/uploads/product/'.$product->image)}}" width="100px" alt="Image" style="border-radius: 8%;">
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li><b>{{$product->name}}</b></li>
                                    <li><b>BDT: {{$product->price}}</b></li>
                                </ul>
                        </div>
                    </a>
                    @endforeach
                </div>   
    </div>
    
    
    

    @endif

    <div class="card"  style="width:45%; text-align:center;">
        <h2>{{__("Cart")}}</h2>
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

                            {{-- @if(session('paid'))
                                @foreach (session('paid') as $paid)
                   
                                    <tr>
                                            <td colspan="3"><strong>Paid</strong></td> 
                                            <td>
                                                
                                                <form action="{{route('calculate')}}">
                                                    @csrf
                                                    <div>
                                                        <input type="number" name="paid" placeholder="{{$paid}}" style="width: 70px">
                                                    </div>
                                                </form>
                                            </td>
                                    </tr>

                                @endforeach
                            @endif

                        

                            @if(session('paid'))
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
                            @endif --}}

                    {{-- @dd(session()->all()) --}}
               </tfoot>
           </table>

           <form action="{{route('cart.store')}}" method="POST">
            @csrf
            <button style="background-color:rgb(10, 187, 16); padding:8px; border-radius:6px;" type="submit">Proceed To Pay</button>
            </form>

            <a href="{{route('order.clear')}}" class='btn btn-danger'>Remove</a>

           {{-- <a href="{{route('orders.store')}}" class="btn btn-primary">Button</a> --}}

    </div>
    
</div>


@endsection
