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
        .table_deg{
            text-align:center;
            margin:auto;
            border: 2px solid beige;
            margin-top: 50px;
            width:600px;
        }

        th{
            background-color: skyblue;
            padding:15px;
            font-size:20px;
            font-weight:bold;
            color:white;
        }
        td
        {
            color:white;
            padding:10px;
            border:1px solid skyblue;
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

                <div>
                    <table class="table_deg">
                        <tr>
                            <th colspan=2>Category</th>
                        </tr>

                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->category_name }}</td>
                            <td>
                                <a href="{{ url('del_category', $category->id) }}" class="btn btn-danger">Del</a>
                            </td>
                        </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>