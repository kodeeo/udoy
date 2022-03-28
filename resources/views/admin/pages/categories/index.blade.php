@extends('admin.master')
@section('content')


<div class="heading">
		<h2>Category List</h2>
</div>
<br>
<div class="container" style="display: flex;">

        <div class="card">
            <table class="table">
              <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Action</th>
                  </tr>
              </thead>

            @foreach ($categories as $key=>$category)
                <tbody>
                    <tr>
                        <th>{{$key+1}}</th>
                          <td>{{$category->name}}</td>
                          <td>{{$category->details}}</td>
                          <td><a href="{{route('category.edit',$category->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                              <a href="{{route('category.delete',$category->id)}}"><i class="fa-solid fa-trash"></i></a>
                          </td>

                        </tr>
                </tbody>

              @endforeach

          </table>
        </div>

        <div class="card">
            <h1>Add Category</h1>
            <hr> 
            <form action="{{route('category.store')}}" method="POST">
                @csrf
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
        </div>
</div>

@endsection
