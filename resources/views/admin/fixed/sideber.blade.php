<!-- Sidebar -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav side-nav">
        <li class="active"><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('customers.index')}}"><i class="fa fa-dashboard"></i>Customer</a></li>
        <li><a href="{{route('category.index')}}"><i class="fa-brands fa-buffer"></i> Category</a></li>
      </li>


      <li><a href="{{route('products.index')}}"><i class="fa-solid fa-shirt"></i>Product</a></li>
      <li><a href="{{route('brands.index')}}"><i class="fa-solid fa-shirt"></i>Brand</a></li>

      <li><a href="{{route('order.index')}}"><i class="fa fa-font"></i> Orders</a></li>
      <li><a href=""><i class="fa-solid fa-magnifying-glass"></i>Order Details</a></li>
      <li><a href=""><i class="fa-solid fa-arrow-trend-up"></i> Stocks Information</a></li>
      <li><a href=""><i class="fa fa-file"></i> Sales</a></li>
      <li><a href=""><i class="fa fa-file"></i> Payments</a></li>
      

      
      <li><a href="bootstrap-elements.html"><i class="fa-solid fa-magnifying-glass"></i>Order Details</a></li>
      <li><a href="bootstrap-grid.html"><i class="fa-solid fa-arrow-trend-up"></i> Stocks Information</a></li>
      <li><a href="blank-page.html"><i class="fa fa-file"></i> Sales</a></li>
      <li><a href="blank-page.html"><i class="fa fa-file"></i> Payments</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Selling Reports  <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Dropdown Item</a></li>
          <li><a href="#">Another Item</a></li>
          <li><a href="#">Third Item</a></li>
          <li><a href="#">Last Item</a></li>
        </ul>
      </li>
    </ul>

    <ul class="nav navbar-nav navbar-right navbar-user">
      <li class="dropdown user-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{auth()->user()->name}}<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
          <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
          <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
          <li class="divider"></li>
          <li><a href="{{route('admin.logout')}}"><i class="fa fa-power-off"></i> Log Out</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
