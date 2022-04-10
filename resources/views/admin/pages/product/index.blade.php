@extends('admin.master')
@section('content')


@if(session()->has('success'))
<p class="alert alert-success">
    {{session()->get('success')}}
</p>
@endif


<div class="card" style="display: flex;">
    <div class="card" style="text-align:center;">
        <h2>Product</h2>
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
                @foreach($products as $key=>$product)  
 
                <tr>
                  <th scope="row">{{$key+1}}</th>
                    <td> 
                        <img src="{{url('/uploads/product/'.$product->image)}}" width="100px" alt="Image">
                    </td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->categories->name}}</td>
                    <td>{{$product->brands->name}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>
                    <a href="{{route('products.show',$product->id)}}"> <i class="fa-solid fa-eye"></i></a>
                    <a href="{{route('products.edit',$product->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="{{route('products.destroy',$product->id)}}"><i class="fa-solid fa-trash"></i></a>

                    </td> 
                    
                </tr>
                  @endforeach
            
          </table>
        
        </div>

        <div class="card" style="width: 50%; text-align:center; margin-left:3%;">
            <h2>Add Products</h2>
            <hr>
            <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
				@csrf
           
                <div class="col-md-6 mb-4">
                    <label for="exampleInputname">Name</label>
                    <input name="name" required type="text" class="form-control" id="exampleInputname"  placeholder="Enter Product Name">
                </div>
                <div class="col-md-6 mb-4">
					<div class="form-group">
						<label for="image">Image:</label>
						<input type="file" name="product_image" class="form-control" id="image">
					</div>
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
                <div class="col-md-12 mb-4">
                    <label for="exampleInputcity">Details</label>
                    <input name="details" required type="text" class="form-control" id="exampleInputdetails"  placeholder="Enter Product Seller Details">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
</div>

@endsection
