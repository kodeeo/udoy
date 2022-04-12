@extends('admin.master')
@section('content')


<div class="card" style="display: flex;">

        <div class="card" style="text-align:center; width:55%">
        <h2>Categories</h2>
        <hr>
        <table class="table table-bordered" style="background-color:#27a6a8; margin-right:95px;">
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
                          <td>
                                <a href="{{route('category.edit',$category->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                
                                <form action="{{ route('category.destroy', $category->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <div>
                                            <button ><i type="submit" class="fa-solid fa-trash"></i></button>
                                        </div>
                                </form>
                          </td>

                        </tr>
                </tbody>

              @endforeach

          </table>
        </div>

        <div class="card" style="width: 45%; text-align:center; margin-left:3%;">
            <h2>Add Categories</h2>
            <hr>
            <form action="{{route('category.store')}}" method="POST">
                @csrf
                <div class="col-md-6 mb-4">
                    <label for="exampleInpuname">Name</label>
                    <input name="category_name" required type="text" class="form-control" id="exampleInputname"  placeholder="Enter Category Name">
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="details">Details</label>
                        <input  name="category_details" type="text" class="form-control" id="category_details" placeholder="Enter Category Details">
                    </div>
                </div>
                <button type="submit" class="btn btn-success" style="margin-top: 2%;">Submit</button>
            </form>
        </div>
</div>
@endsection
