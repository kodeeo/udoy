@extends('admin.master')
@section('content')


<div class="heading">
		<h2>Customers</h2>
</div>
<br>
<div class="wrapper" style="display: flex;">
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
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
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->city}}</td>
                                <td>{{$customer->country}}</td>
                                <td>
                                    <a href="{{route('customers.show',$customer->id)}}"><i class="fa-solid fa-eye"></i></a>
                                    <a href="{{route('customers.edit',$customer->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{route('customers.delete',$customer->id)}}"><i class="fa-solid fa-trash"></i></a>
                                </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>

        <div>
            <h1>Add Customers</h1>
            <hr>
            <form action="{{route('customers.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputname">Name</label>
                    <input name="name" required type="text" class="form-control" id="exampleInputname"  placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputemail">Email</label>
                    <input name="email" required type="email" class="form-control" id="exampleInputemail"  placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputpasssword">Password</label>
                    <input name="password" required type="password" class="form-control" id="exampleInputpasssword"  placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputaddress">Address</label>
                    <input name="address" required type="text" class="form-control" id="exampleInputaddress"  placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputphone">Phone</label>
                    <input name="phone" required type="number" class="form-control" id="exampleInputphone"  placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputcity">City</label>
                    <input name="city" required type="text" class="form-control" id="exampleInputcity"  placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputcountry">Country</label>
                    <input name="country" required type="text" class="form-control" id="exampleInputcountry"  placeholder="">
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
