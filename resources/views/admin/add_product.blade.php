

<!DOCTYPE html>
<html>
  <head>

    @include('admin.css')

    <style>
        .div_deg{
            display:  flex;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
        }

        label{
            display: inline-block;
            width: 200px;
        }
        textarea{
            width: 300px;
            height: 70px;
        }
    </style>

  </head>
  <body>

       @include('admin.header')

       @include('admin.sidebar')


      <!-- Sidebar Navigation end-->


      <div class="page-content">

          <div class="container-fluid">


            <h1>Add Product</h1>



          <div class="div_deg">


            <form action="{{ url('upload_product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label>Product Title</label>
                    <input type="text" name="title">
                </div>
                <div>
                    <label>Description</label>
                    <textarea name="description"></textarea>
                </div>

                <div>
                    <label>Price</label>
                    <input type="number" name="price">
                </div>

                <div>
                    <label>Product Quantity</label>
                    <input type="number" name="qty">
                </div>









                <div>
                    <label>Product Category</label>

                    <select name="category">

                        <option>--Select Category--</option>



                        @foreach ($category as $category)

                        <option name="{{ $category->category_name }}">{{ $category->category_name }}</option>

                        @endforeach



                    </select>
                </div>


                 <div>
                    <label>Product Image</label>
                    <input type="file" name="image">
                </div>



                <div>

                    <input type="submit" value="Add product" class="btn btn-warning">
                </div>

            </form>
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
