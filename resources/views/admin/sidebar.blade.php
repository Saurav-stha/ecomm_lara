<div class="d-flex align-items-stretch">

<nav id="sidebar">
  <!-- Sidebar Header-->
  <div class="sidebar-header d-flex align-items-center">
    <div class="avatar"><img src="{{ asset('admintemp/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
    <div class="title">
      <h1 class="h5">Saurav Shrestha</h1>
      <p>Developer</p>
    </div>
  </div>
  <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
  <ul class="list-unstyled">
          <li class="active"><a href="index.html"> <i class="icon-home"></i>Home </a></li>
          <li>
              <a href="{{ url('view_category')}}">
                  <i class="icon-grid"></i>Categories 
              </a>
          </li>
          <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Products</a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href="{{ url('add_product')}}">Add Product</a></li>
              <li><a href="#">Edit Product</a></li>
            </ul>
          </li>
          <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>
  </ul><span class="heading">Extras</span>
  <ul class="list-unstyled">
    <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
    <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
    <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
  </ul>
</nav>