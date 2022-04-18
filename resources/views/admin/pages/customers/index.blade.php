@extends('admin.master')
@section('content')

<div class="card" style="display: flex;">

        <div class="card" style="text-align:center; width:55%">
            <h2>Customers</h2>
            <form action="{{route('customers.index')}}" method="GET">
    <input name="search" class="search-input" type="text" placeholder="Customer Name" aria-label="Search">
    <button style="background-color:rgb(39, 166, 168);" type="submit"><i class='fas fa-search'></i></button>
    </form>
            <hr>
            <table class="table table-bordered" style="background-color:#27a6a8;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Action</th>
                    </tr>
                </thead>

                @foreach ($customers as $key=>$customer)
                    <tbody>
                        <tr>
                            <th>{{$key+1}}</th>
                                <td><img src="{{url('/uploads/customers/'.$customer->image)}}" style="border-radius:4px" width="100px" alt="customer image"></td>
                                
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->city}}</td>
                                <td>{{$customer->country}}</td>
                                <td>
                                    <a href="{{route('customers.show',$customer->id)}}"><i class="fa fa-eye"></i></a>
                                    <a href="{{route('customers.edit',$customer->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <form action="{{ route('customers.destroy', $customer->id)}}" method="POST">
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
            <h2>Add Customers</h2>
            <hr>
            <form action="{{route('customers.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 mb-4">
                    <label for="exampleInputname">Name</label>
                    <input name="name" required type="text" class="form-control" id="exampleInputname" placeholder="Enter Customer's Name">
                </div>
                <div class="col-md-6 mb-4">
                    <label for="exampleInputemail">Email</label>
                    <input name="email" required type="email" class="form-control" id="exampleInputemail" placeholder="Enter Customer's Email">
                </div>
                <div class="col-md-6 mb-4">
                    <label for="exampleInputpasssword">Password</label>
                    <input name="password" required type="password" class="form-control" id="exampleInputpasssword"  placeholder="Enter Password">
                </div>
                <div class="col-md-6 mb-4">
                    <label for="exampleInputaddress">Address</label>
                    <input name="address" required type="text" class="form-control" id="exampleInputaddress"  placeholder="Enter Customer's Address">
                </div>
                <div class="col-md-6 mb-4">
                    <label for="exampleInputphone">Phone</label>
                    <input name="phone" required type="number" class="form-control" id="exampleInputphone"  placeholder="Enter Customer's Phone">
                </div>
                <div class="col-md-6 mb-4">
                    <label for="exampleInputcity">City</label>
                    <input name="city" required type="text" class="form-control" id="exampleInputcity"  placeholder="Enter Customer's City">
                </div>
                <div class="col-md-6 mb-4">
                    <label for="exampleInputcountry">Country</label>
                    <input name="country" required type="text" class="form-control" id="exampleInputcountry"  placeholder="Enter Customer's Country">
                </div>

                <div class="col-md-6 mb-4">
                    <label for="exampleInputimage">Image</label>
                    <input name="cust_image" type="file" class="form-control" id="exampleInputimage"  placeholder="Select Image">
                </div>

                <button type="submit" class="btn btn-success" style="margin-top: 2%;">Submit</button>
            </form>
        </div>
</div>

@endsection
