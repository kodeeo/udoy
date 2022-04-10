<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Udoy</title>

    <!-- Bootstrap core CSS -->
<link href="{{url('/admin/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="{{url('/admin/css/sb-admin.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">


  <body>

    <div id="wrapper">

      @include('admin.fixed.sideber')


      @include('admin.fixed.header')


     <div class="container-fluid px-4 pt-3">
      @yield('content')
     </div>
     


    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="{{url('/admin/js/jquery-1.10.2.js')}}"></script>
    <script src="{{url('/admin/js/bootstrap.js')}}"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}

    <!-- Page Specific Plugins -->
    

  </body>
</html>
