<!DOCTYPE html>
<html>
  <head> 
    @include('admin.head')
  </head>
  <body>
    @include('admin.header')
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            @include('admin.body')
          </div>      
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('admintemp/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('admintemp/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{ asset('admintemp/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admintemp/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{ asset('admintemp/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('admintemp/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('admintemp/js/charts-home.js')}}"></script>
    <script src="{{ asset('admintemp/js/front.js')}}"></script>
  </body>
</html>