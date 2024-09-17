<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.head")
    <style type="text/css">
        input[type='text']
        {
            width : 400px;
            height: 50px;
        }
        .div_deg
        {
            display:flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    @include("admin.header")

    @include("admin.sidebar")
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <h1>Add Category</h1>
                <div class="div_deg">
                    <form action="{{ url('add_category')}}" method="POST">
                        @csrf
                        <div>
                            <input type="text" name="new_category" placeholder="Eg. Dairy, Chocolates...">
                            
                            <input class = "btn btn-primary" type="submit" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>