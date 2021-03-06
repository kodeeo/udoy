@extends('admin.master')
@section('content')


@if(session()->has('success'))
<p class="alert alert-success">
    {{session()->get('success')}}
</p>
@endif


<div class="card" style="display: flex;">

    <div class="card" style="text-align:center; width:55%">
    <h2>Brands</h2>
    <form action="{{route('brands.index')}}" method="GET">
    <input name="search" class="search-input" type="text" placeholder="Brand Name" aria-label="Search">
    <button style="background-color:rgb(39, 166, 168);" type="submit"><i class='fas fa-search'></i></button>
    </form>
    <hr>
        <table class="table table-bordered" style="background-color:#27a6a8; margin-right:95px;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Details</th>
                        <th>Action</th>
                    </tr>
                </thead>

            @foreach($brands as $key=>$brand)  
                <tbody>
                    <tr>
                    <th scope="row">{{$key+1}}</th>
                        <td>{{$brand->name}}</td>
                        <td> <img src="{{url('/uploads/brand/'.$brand->image)}}" width="100px" alt="Image"></td>
                        <td>{{$brand->details}}</td>
                        <td>
                                <a href="{{route('brands.show',$brand->id)}}"><i class="fa-solid fa-eye"></i></a>
                                <a href="{{route('brands.edit',$brand->id)}}"><i class="fa-solid fa-pen"></i></a>
                                <form action="{{ route('brands.destroy', $brand->id)}}" method="POST">
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
        <h2>Add Brand</h2>
            <hr>
            <form action="{{route('brands.store')}}" method="POST" enctype="multipart/form-data">
				@csrf
           
                <div class="col-md-6 mb-4">
                    <label for="exampleInputname">Name</label>
                    <input name="brand_name" required type="text" class="form-control" id="exampleInputname"  placeholder="Enter Brand Name">
                </div>
                <div class="col-md-6 mb-4">
					<div class="form-group">
						<label for="brand_image">Image:</label>
						<input type="file" name="brand_image" class="form-control" id="brand_image">
					</div>
				</div>
                
                <div class="col-md-12 mb-4">
                    <label for="exampleInputcity">Details</label>
                    <input name="brand_details" required type="text" class="form-control" id="exampleInputdetails"  placeholder="Enter Brand Details">
                </div>
                <button type="submit" class="btn btn-success" style="margin-top: 2%;">Submit</button>
            </form>
    </div>
</div>

@endsection
