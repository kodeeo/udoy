@extends('admin.master')
@section('content')
<div class="card" style="text-align:center; margin-left:10%; margin-right:10%;">
    <h1>Update Category Information</h1>
    <hr>
<form action="{{route('category.update',$edit_category->id)}}" method="POST">
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
        <input name="category_name" required type="text" value="{{$edit_category->name}}" class="form-control" id="exampleInputEmail1">
    </div>

    <div class="col-md-6 mb-4">
        <div class="form-group">
            <label for="details">Details:</label>
            <input  name="category_details" type="text" value="{{$edit_category->details}}" class="form-control" id="category_details" >
        </div>
    </div>


    <button type="submit" class="btn btn-success">Submit</button>
</form>




@endsection
