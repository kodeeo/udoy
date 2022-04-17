@extends('admin.master')
@section('content')

<div style="text-align:center; margin:3%;">
    <h2>Update Brand Information</h2>
    <hr>
</div>

<div class="card" style="text-align:center; display:flex">

    <div>
        <img src="{{url('/uploads/brand/'.$edit->image)}}" width="300px" alt="Brand Image"></td>
    </div>

    <div style="margin-top: 3%; margin-left:2%;">
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
                <label for="exampleInputName">Name</label>
                <input name="name" required type="text" value="{{$edit->name}}" class="form-control" id="exampleInputName">
            </div>

            <div class="col-md-6 mb-4">
                <label for="exampleInputimage">Image</label>
                <input name="brand_image" type="file" class="form-control" id="exampleInputimage"  placeholder="">
            </div>
        
            <div class="col-md-12 mb-4">
                <label for="details">Details</label>
                <input  name="details" type="text" value="{{$edit->details}}" class="form-control" id="category_details" >
            </div>

            <button type="submit" class="btn btn-success" style="margin-top: 2%;">Submit</button>
        </form>
    </div>

</div>
@endsection
