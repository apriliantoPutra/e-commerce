<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="{{ asset('/admincss/img/avatar-6.jpg') }}" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">Mark Stephen</h1>
        <p>Web Designer</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
        <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
            <a href="{{ url('admin/dashboard') }}">
                <i class="icon-home"></i>Home
            </a>
        </li>
        <li class="{{ Request::is('view_category') ? 'active' : '' }}">
            <a href="{{ url('view_category') }}">
                <i class="icon-grid"></i>Category
            </a>
        </li>

            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Produxts</a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="{{ url('add_product') }}">Add Product</a></li>
                <li><a href="{{ url('view_product') }}">View Product</a></li>
                <li><a href="#">Page</a></li>
              </ul>
            </li>
            <li><a href="#order" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Orders</a>
              <ul id="order" class="collapse list-unstyled ">
                <li><a href="{{ url('view_orders') }}">View Orders</a></li>
                <li><a href="#">Add Orders</a></li>
                <li><a href="#">Page</a></li>
              </ul>
            </li>
  </nav>
