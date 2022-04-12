@extends('admin.master')
@section('content')

<div style="text-align:center; margin:3%;">
    <h2>Update Product Information</h2>
    <hr>
</div>

<div class="card" style="text-align:center; display:flex">
    <hr>
            <div>
                <img src="{{url('/uploads/product/'.$products->image)}}" width="300px" alt="Product Image"></td>
            </div>

            <div style="margin-top: 3%; margin-left:2%;">
                        <form action="{{route('products.update',$products->id)}}" method="POST">
                            @method('PUT')
                            @csrf
                    
                            <div class="col-md-6 mb-4">
                                <label for="exampleInputname">Name</label>
                                <input name="name" value="{{$products->name}}" required type="text" class="form-control" id="exampleInputname"  placeholder="Enter Product Name">
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label for="image">Image:</label>
                                    <input type="file" value="{{$products->image}}" name="product_image" class="form-control" id="image">
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="exampleInputpasssword">Category</label>
                                <select id="category" name="category" class="form-control">
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>   
                                        @endforeach
                                </select>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label for="exampleInputpasssword">Brand</label>
                                <select id="brand" name="brand" class="form-control">
                                          @foreach ($brands as $brand)
                                                <option value="{{$brand->id}}">{{$brand->name}}</option>   
                                          @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="exampleInputaddress">Price</label>
                                <input name="price" value="{{$products->price}}" required type="number" class="form-control" id="exampleInputnumber"  placeholder="Enter Product Pirce">
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="exampleInputaddress">Quantity</label>
                                <input name="quantity" value="{{$products->quantity}}" required type="number" class="form-control" id="exampleInputnumber"  placeholder="Enter Product Quantity">
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="exampleInputcity">Details</label>
                                <input name="details" value="{{$products->details}}" required type="text" class="form-control" id="exampleInputdetails"  placeholder="Enter Product Seller Details">
                            </div>
                            <button type="submit" class="btn btn-success" style="margin-top: 2%;">Submit</button>
                        </form>
            </div>
</div>
@endsection