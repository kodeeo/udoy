@extends('admin.master')
@section('content')


<style>
	body{
	 
	   background: linear-gradient(to left, #ccccff 45%, #ccffff 95%);
   
	}
	 #customers {
	   font-family: Arial, Helvetica, sans-serif;
	   border-collapse: collapse;
	   width: 100%;
	 }
	 /* .heading h2{
	   text-align: center;
	 } */
	 #customers td, #customers th {
	   border: 1px solid #ddd;
	   padding: 8px;
	 }
	 
	 #customers tr:nth-child(even){background-color: #ccccff;}
	 
	 #customers tr:hover {background-color: #ddd;}
	 
	
	 #customers th {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: left;
		background-color: #001313;
		color: white;
	  }
	 </style>

     <div class="heading">

	<h2>Cloth Type</h2>
	  </div>
	  
	  <br>
	  <a href="" class="btn btn-primary" type="button">Create New Cloth</a>
	  <table id="customers">
		<tr>
		<th scope="row">SL No</th>
		<th>Image</th>
		<th>Name</th>
		<th>Type</th>
		<th>Color</th>
		<th>Size</th>
		<th>Action</th>
		</tr>  
	<tr>
	    <th scope="row"></th>
		<td>th</td>
		<td>th</td>	
	</tr>
	
	</table>

@endsection