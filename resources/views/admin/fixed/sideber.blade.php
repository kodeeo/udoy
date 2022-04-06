<!-- Sidebar -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav side-nav">
        <li class="active"><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('customers.index')}}"><i class="fa fa-dashboard"></i>Customer</a></li>
        <li><a href="{{route('category.index')}}"><i class="fa-brands fa-buffer"></i> Category</a></li>
      </li>
      <li><a href="{{route('product.view')}}"><i class="fa-solid fa-shirt"></i>Product</a></li>
      <li><a href="{{route('brand.index')}}"><i class="fa-solid fa-shirt"></i>Brand</a></li>

      <li><a href="{{route('order.index')}}"><i class="fa fa-font"></i> Orders</a></li>
      <li><a href=""><i class="fa-solid fa-magnifying-glass"></i>Order Details</a></li>
      <li><a href=""><i class="fa-solid fa-arrow-trend-up"></i> Stocks Information</a></li>
      <li><a href=""><i class="fa fa-file"></i> Sales</a></li>
      <li><a href=""><i class="fa fa-file"></i> Payments</a></li>
      
    </ul>

    <ul class="nav navbar-nav navbar-right navbar-user">
      <li class="dropdown user-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Udoy <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
          <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
          <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
          <li class="divider"></li>
          <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
