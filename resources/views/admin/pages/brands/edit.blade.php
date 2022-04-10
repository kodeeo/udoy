@extends('admin.master')
@section('content')
<div class="card" style="text-align:center; margin-left:10%; margin-right:10%;">
    <h1>Update Brand Information</h1>
    <hr>

    <img src="{{url('/uploads/brand/'.$edit->image)}}" width="300px" alt="Brand Image"></td>

<form action="{{route('brands.update',$edit->id)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="col-md-6 mb-4">
    <label for="exampleInputEmail1">Name <span style="color:red">*</span> : </label>
        <input name="name" required type="text" value="{{$edit->name}}" class="form-control" id="exampleInputEmail1">
    </div>

    <div class="col-md-6 mb-4">
        <div class="form-group">
            <label for="details">Details:</label>
            <input  name="details" type="text" value="{{$edit->details}}" class="form-control" id="category_details" >
        </div>
    </div>

    <div class="col-md-6 mb-4">
        <label for="exampleInputimage">Image</label>
            <input name="brand_image" type="file" class="form-control" id="exampleInputimage"  placeholder="">
    </div>


    <button type="submit" class="btn btn-success">Submit</button>
</form>




@endsection
