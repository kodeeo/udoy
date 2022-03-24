@extends('admin.master')
@section('content')
<center><h1>Edit Category</h1> </center><br>

<form action="{{route('category.update',$edit_category->id)}}" method="POST">
    @method('PUT')
    @csrf
    @if(session()->has ('success'))
    <p class="alert alert-success">
      {{session()->get ('success')}}
    </p>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="form-group">
        <label for="exampleInputEmail1">Name <span style="color:red">*</span> : </label>
        <input name="category_name" required type="text" value="{{$edit_category->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category Name">
    </div>
   
    <div class="form-group">
        <div class="form-group">
            <label for="details">Details:</label>
            <input  name="category_details" type="text" value="{{$edit_category->details}}" class="form-control" id="category_details" placeholder="Enter Category Details">
        </div>
    </div>

   
    <button type="submit" class="btn btn-success">Submit</button>
</form>




@endsection