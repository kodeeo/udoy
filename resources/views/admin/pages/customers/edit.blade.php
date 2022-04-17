@extends('admin.master')
@section('content')
<div style="text-align:center; margin:3%;">
    <h2>Update Customer Information</h2>
    <hr>
</div>


<div class="card" style="text-align:center; display:flex">
           
                    <div>
                        <img src="{{url('/uploads/customers/'.$edit->image)}}" width="300px" alt="Customer Image"></td>
                    </div>

                    <div style="margin-top: 3%; margin-left:2%;">
                        <form action="{{route('customers.update',$edit->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="col-md-6 mb-4">
                                <label for="exampleInputname">Name</label>
                                <input name="name" required type="text" value="{{ old('name') ?? $edit->name}}" class="form-control" id="exampleInputname" >
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="exampleInputaddress">Address</label>
                                <input name="address" required type="text" value="{{ old('address') ?? $edit->address}}" class="form-control" id="exampleInputaddress" >
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="exampleInputphone">Phone</label>
                                <input name="phone" required type="number" value="{{ old('address') ?? $edit->phone}}" class="form-control" id="exampleInputphone"  >
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="exampleInputcity">City</label>
                                <input name="city" required type="text" value="{{ old('address') ?? $edit->city}}" class="form-control" id="exampleInputcity" >
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="exampleInputcountry">Country</label>
                                <input name="country" required type="text" value="{{ old('address') ?? $edit->country}}" class="form-control" id="exampleInputcountry" >
                            </div>
                            <div class="col-md-6 mb-4">
                            <label for="exampleInputimage">Image</label>
                                <input name="cust_image" type="file" class="form-control" id="exampleInputimage"  placeholder="">
                            </div>

                            <button type="submit" class="btn btn-success" style="margin-top: 2%;">Submit</button>
                        </form>
                    </div>
            
        
</div>

@endsection
