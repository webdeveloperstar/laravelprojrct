

<!DOCTYPE html>
<html>
  <head>

    @include('admin.css')

    <style>
        .div_deg{
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 40px;
        }
        th{
            border: 1px solid green;
            padding: 20px;
            background: skyblue;
        }
        td{
            border: 1px solid red;
            padding: 20px;
            text-align: center;
        }
        input[type='search']
        {
            width: 500px;
            height: 50px;
            margin-left: 50px;
        }
    </style>

  </head>
  <body>

       @include('admin.header')

       @include('admin.sidebar')


      <!-- Sidebar Navigation end-->


      <div class="page-content">

          <div class="container-fluid">


            <form action="{{ url('product_search') }}" method="get">
                @csrf
                <input type="search" name="search">
                <input type="submit" value="Search" class="btn btn-success">
            </form>


            <div class="div_deg">
                <table>
                    <tr>
                        <th>Product Title</th>
                        <th>description</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>


                    @foreach ($product as $products)

                    <tr>
                        <td>{{ $products->title }}</td>
                        <td>{{ $products->description }}</td>
                        <td>{{ $products->category }}</td>
                        <td>{{ $products->price }}</td>
                        <td>{{ $products->quantity }}</td>

                        <td><img src="{{ asset('image/'.$products->image) }}" alt=""
                            style="width: 100px; height: 100px;"></td>

                            <td>
                                <a href="{{ url('delete_product',$products->id) }}" class="btn btn-danger">Delete</a>
                            </td>

                            <td>
                                <a href="{{ url('update_product',$products->id) }}" class="btn btn-success">Update</a>
                            </td>
                    </tr>

                    @endforeach

                </table>
            </div>

          <div style="margin-right: 50%;">
            {{ $product->links() }}
          </div>



      </div>


    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/front.js') }}"></script>
  </body>
</html>
