<!DOCTYPE html>
<html>
  <head> 
    @include('admin.head')

    <style>

        .div_deg{
            display:flex;
            justify-content:center;
            align-items:center;
            margin:60px;
        }

        label{
            display: inline-block;
            width:250px;
            font-size:15px;
            color:white;     
        }

        .input_deg{
            padding:10px;
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

            <h1>Add Product</h1>
            <div class="div_deg">
                <form action="{{ url('create_product')}}" method="POST" enctype="multipart/form-data">

                @csrf
    
                    <div class="input_deg">
                        <label>Product Title</label>
                        <input type="text" name="prodTitle">
                    </div>
                    <div class="input_deg">
                        <label>Description</label>
                        <textarea name="prodDesc"></textarea>
                    </div>
                    <div class="input_deg">
                        <label>Price</label>
                        <input type="number" name="prodPrice">
                    </div>
                    <div class="input_deg">
                        <label>Quantity</label>
                        <input type="number" name="prodQty">
                    </div>
                    <div class="input_deg">
                        <label>Category</label>
                        <select name="category" required>

                            <option>Select a Category</option>
                            @foreach ($categories as $cat)
                            <option value="{{ $cat->category_name}}">{{ $cat->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input_deg">
                        <label>Product Image</label>
                        <input type="file" name="prodImg">
                    </div>

                    <div>
                        <input class="btn btn-success" type="submit" value="Create">
                    </div>
    
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