@extends('admin.master')
@section('content')
<h1>Add Category</h1><br>

<form action="{{route('category.store')}}" method="POST">
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
        <label for="exampleInpuname">Name <span style="color:red">*</span> : </label>
        <input name="category_name" required type="text" class="form-control" id="exampleInputname"  placeholder="Enter Category Name">
    </div>
   
    <div class="form-group">
        <div class="form-group">
            <label for="details">Details:</label>
            <input  name="category_details" type="text" class="form-control" id="category_details" placeholder="Enter Category Details">
        </div>
    </div>

   
    <button type="submit" class="btn btn-success">Submit</button>
</form>




@endsection