<!-- Sidebar -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav side-nav">
        <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href=""><i class="fa fa-dashboard"></i>Customer</a></li>
        <li><a href="{{route('category.index')}}"><i class="fa-brands fa-buffer"></i> Category</a></li>
      </li>
      <li><a href="{{route('product.view')}}"><i class="fa-solid fa-shirt"></i>Product</a></li>

      <li><a href=""><i class="fa fa-font"></i> Orders</a></li>
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
      <li class="dropdown messages-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">7</span> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li class="dropdown-header">7 New Messages</li>
          <li class="message-preview">
            <a href="#">
              <span class="avatar"><img src="http://placehold.it/50x50"></span>
              <span class="name">John Smith:</span>
              <span class="message">Hey there, I wanted to ask you something...</span>
              <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
            </a>
          </li>
          <li class="divider"></li>
          <li class="message-preview">
            <a href="#">
              <span class="avatar"><img src="http://placehold.it/50x50"></span>
              <span class="name">John Smith:</span>
              <span class="message">Hey there, I wanted to ask you something...</span>
              <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
            </a>
          </li>
          <li class="divider"></li>
          <li class="message-preview">
            <a href="#">
              <span class="avatar"><img src="http://placehold.it/50x50"></span>
              <span class="name">John Smith:</span>
              <span class="message">Hey there, I wanted to ask you something...</span>
              <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
            </a>
          </li>
          <li class="divider"></li>
          <li><a href="#">View Inbox <span class="badge">7</span></a></li>
        </ul>
      </li>
      <li class="dropdown alerts-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Default <span class="label label-default">Default</span></a></li>
          <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
          <li><a href="#">Success <span class="label label-success">Success</span></a></li>
          <li><a href="#">Info <span class="label label-info">Info</span></a></li>
          <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
          <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
          <li class="divider"></li>
          <li><a href="#">View All</a></li>
        </ul>
      </li>
      <li class="dropdown user-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
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