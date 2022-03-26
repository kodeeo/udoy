@extends('admin.master')
@section('content')





<div>
            <h1>Update Information</h1>
            <hr>
            <form action="{{route('customers.update',$edit->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="exampleInputname">Name</label>
                    <input name="name" required type="text" value="{{ old('name') ?? $edit->name}}" class="form-control" id="exampleInputname"  placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputaddress">Address</label>
                    <input name="address" required type="text" value="{{ old('address') ?? $edit->address}}" class="form-control" id="exampleInputaddress"  placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputphone">Phone</label>
                    <input name="phone" required type="number" value="{{ old('address') ?? $edit->phone}}" class="form-control" id="exampleInputphone"  placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputcity">City</label>
                    <input name="city" required type="text" value="{{ old('address') ?? $edit->city}}" class="form-control" id="exampleInputcity"  placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputcountry">Country</label>
                    <input name="country" required type="text" value="{{ old('address') ?? $edit->country}}" class="form-control" id="exampleInputcountry"  placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputimage">Image</label>
                    <input name="image" class="form-control" id="exampleInputimage"  placeholder="">
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
</div>

@endsection
