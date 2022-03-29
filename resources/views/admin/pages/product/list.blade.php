@extends('admin.master')
@section('content')


@if(session()->has('success'))
<p class="alert alert-success">
    {{session()->get('success')}}
</p>
@endif

<div class="heading">
		<h2>Customers</h2>
</div>
<br>
<div class="wrapper" style="display: flex;">
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Details</th>
                    </tr>
                </thead>

                    <tbody>
                        <tr>
                            <th>1</th>
                                <td>fred</td>
                                <td>erc</td>
                                <td>jhguwf</td>
                                <td>jhguwf</td>
                                <td>jhguwf</td>
                                <td>
                                    <a href=""><i class="fa-solid fa-eye"></i></a>
                                    <a href=""><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href=""><i class="fa-solid fa-trash"></i></a>
                                </td>
                        </tr>
                    </tbody>
         
            </table>
        </div>

        <div>
            <h1>Add Product</h1>
            <hr>
            <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
				@csrf
           
                <div class="form-group">
                    <label for="exampleInputname">Name</label>
                    <input name="name" required type="text" class="form-control" id="exampleInputname"  placeholder="Enter Product Name">
                </div>
				<div class="form-group">
					<div class="form-group">
						<label for="image">Image:</label>
						<input required type="file" name="cloth_image" class="form-control" id="image">
					</div>
				</div>
                <div class="form-group">
                    <label for="exampleInputpasssword">Category</label>
                    <input name="category" required type="category" class="form-control" id="exampleInputcategory"  placeholder="Enter Product Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputaddress">Price</label>
                    <input name="price" required type="number" class="form-control" id="exampleInputnumber"  placeholder="Enter Product Pirce">
                </div>
				<div class="form-group">
                    <label for="exampleInputaddress">Quantity</label>
                    <input name="quantity" required type="number" class="form-control" id="exampleInputnumber"  placeholder="Enter Product Quantity">
                </div>
                <div class="form-group">
                    <label for="exampleInputcity">Details</label>
                    <input name="detail" required type="text" class="form-control" id="exampleInputdetails"  placeholder="Enter Product Seller Details">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
</div>

@endsection
