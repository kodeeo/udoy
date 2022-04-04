@extends('admin.master')
@section('content')


@if(session()->has('success'))
<p class="alert alert-success">
    {{session()->get('success')}}
</p>
@endif


<div class="card" style="display: flex;">
    <div class="card" style="text-align:center;">
        <h2>Brand</h2>
        <table class="table table-bordered" style="background-color:#27a6a8; margin-right:95px;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Details</th>
                    <th>Action</th>
                </tr>
                @foreach($brands as $key=>$brand)  
 
                <tr>
                  <th scope="row">{{$key+1}}</th>
                    <td>{{$brand->name}}</td>
                    <td> <img src="{{url('/uploads/brand/'.$brand->image)}}" width="100px" alt="Image"></td>
                    <td>{{$brand->details}}</td>
                    <td>
                    <a href="{{route('brand.view',$brand->id)}}"><i class="fa-solid fa-eye"></i></a>
                    <a href="{{route('brand.edit',$brand->id)}}"><i class="fa-solid fa-pen"></i></a>
                    <a href="{{route('brand.delete',$brand->id)}}"><i class="fa-solid fa-trash"></i></a>
                    </td> 
                    
                </tr>
                  @endforeach
            
          </table>
        
        </div>

        <div class="card" width: 50%; text-align:center; margin-left:3%;">
            <h2>Add Brand</h2>
            <hr>
            <form action="{{route('brand.store')}}" method="POST" enctype="multipart/form-data">
				@csrf
           
                <div class="form-group">
                    <label for="exampleInputname">Name</label>
                    <input name="brand_name" required type="text" class="form-control" id="exampleInputname"  placeholder="Enter Brand Name">
                </div>
				<div class="form-group">
					<div class="form-group">
						<label for="image">Image:</label>
						<input type="file" name="brand_image" class="form-control" id="image">
					</div>
				</div>
                
                <div class="form-group">
                    <label for="exampleInputcity">Details</label>
                    <input name="brand_details" required type="text" class="form-control" id="exampleInputdetails"  placeholder="Enter Brand Details">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
</div>

@endsection
