@extends('admin.master')
@section('content')


@if(session()->has('success'))
<p class="alert alert-success">
    {{session()->get('success')}}
</p>
@endif


<div class="card" style="display: flex;">

    <div class="card" style="text-align:center; width:55%">
        <h2>Products</h2>
        <form action="{{route('products.index')}}" method="GET">
    <input name="search" class="search-input" type="text" placeholder="Product Name" aria-label="Search">
    <button style="background-color:rgb(39, 166, 168);" type="submit"><i class='fas fa-search'></i></button>
    </form>
        <hr>

        <table class="table table-bordered" style="background-color:#27a6a8; margin-right:95px;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>

                @foreach($products as $key=>$product)  
                    <tbody>
                        <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td> 
                                <img src="{{url('/uploads/product/'.$product->image)}}" width="100px" alt="Image">
                            </td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->categories->name}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>
                                <a href="{{route('products.show',$product->id)}}"><i class="fa fa-eye"></i></a>
                                <a href="{{route('products.edit',$product->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{ route('products.destroy', $product->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <div>
                                            <button ><i type="submit" class="fa fa-trash"></i></button>
                                        </div>
                                </form>                            
                            </td> 
                        </tr>
                    </tbody>
                @endforeach
            
        </table>
        
    </div>

    <div class="card" style="width: 45%; text-align:center; margin-left:3%;">
            <h2>Add Products</h2>
            <hr>
            <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
				@csrf
           
                <div class="col-md-6 mb-2">
                    <label for="exampleInputname">Name</label>
                    <input name="name" required type="text" class="form-control" id="exampleInputname"  placeholder="Enter Product Name">
                </div>
                    
				<div class="form-group col-md-6 mb-2">
						<label for="image">Image:</label>
						<input type="file" name="product_image" class="form-control" id="image">
				</div>

                <div class="col-md-6 mb-4">
                    <label for="exampleInputpasssword">Category</label>
                    <select id="category" name="category" class="form-control">
                              @foreach ($p_category as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>   
                              @endforeach
                    </select>
                </div>

                <div class="col-md-6 mb-4">
                    <label for="exampleInputpasssword">Brand</label>
                    <select id="brand" name="brand" class="form-control">
                              @foreach ($p_brand as $brand)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>   
                              @endforeach
                    </select>
                </div>

                <div class="col-md-6 mb-4">
                    <label for="exampleInputaddress">Price</label>
                    <input name="price" required type="number" class="form-control" id="exampleInputnumber"  placeholder="Enter Product Pirce">
                </div>

                <div class="col-md-6 mb-4">
                    <label for="exampleInputaddress">Quantity</label>
                    <input name="quantity" required type="number" class="form-control" id="exampleInputnumber"  placeholder="Enter Product Quantity">
                </div>

                <div class="col-md-12 mb-4 mt-2">
                    <label for="exampleInputcity">Details</label>
                    <input name="details" required type="text" class="form-control" id="exampleInputdetails"  placeholder="Enter Product Details">
                </div>

                <button type="submit" class="btn btn-success" style="margin-top: 2%;">Submit</button>
            </form>
    </div>
</div>

@endsection
