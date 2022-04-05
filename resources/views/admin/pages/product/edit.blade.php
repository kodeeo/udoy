@extends('admin.master')
@section('content')

<div class="card" style="text-align:center; margin-left:10%; margin-right:10%;">
            <h1>Update Product Information</h1>
            <hr>
            <form action="{{route('product.update',$product->id)}}" method="POST">
                @method('PUT')
				@csrf
           
                <div class="form-group">
                    <label for="exampleInputname">Name</label>
                    <input name="name" value="{{$product->name}}" required type="text" class="form-control" id="exampleInputname"  placeholder="Enter Product Name">
                </div>
				<div class="form-group">
					<div class="form-group">
						<label for="image">Image:</label>
						<input type="file" value="{{$product->image}}" name="product_image" class="form-control" id="image">
					</div>
				</div>
                <div class="form-group">
                    <label for="exampleInputpasssword">Category</label>
                    <select id="category" name="category">
                              @foreach ($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>   
                              @endforeach
                               </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputaddress">Price</label>
                    <input name="price" value="{{$product->price}}" required type="number" class="form-control" id="exampleInputnumber"  placeholder="Enter Product Pirce">
                </div>
				<div class="form-group">
                    <label for="exampleInputaddress">Quantity</label>
                    <input name="quantity" value="{{$product->quantity}}" required type="number" class="form-control" id="exampleInputnumber"  placeholder="Enter Product Quantity">
                </div>
                <div class="form-group">
                    <label for="exampleInputcity">Details</label>
                    <input name="details" value="{{$product->details}}" required type="text" class="form-control" id="exampleInputdetails"  placeholder="Enter Product Seller Details">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
</div>
@endsection