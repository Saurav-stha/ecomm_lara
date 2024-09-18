<!DOCTYPE html>
<html>
  <head> 
    @include('admin.head')

    <style type="text/css">
        .div_deg{
            display:flex;
            justify-content:center;
            align-items:center;
            margin:60px;
        }
        input[type='text']
        {
            width:400px;
            height:40px;
        }
    </style>

  </head>
  <body>
    @include('admin.header')
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

              
              
              <h1>EDIT CATEGORY</h1>
              <div class="div_deg">
                
                <form action="{{ url('update_category',$editCat->id) }}" method="POST">
                    @csrf
                    <input type="text" name="category" value="{{ $editCat->category_name}}">
                    <input type="submit" class="btn btn-secondary" value="Update">
                </form>
              </div>
            

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
