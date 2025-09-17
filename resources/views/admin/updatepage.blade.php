

<!DOCTYPE html>
<html>
  <head>

    @include('admin.css')

    <style>
        .div_deg{
            display: flex;
            align-items:center;
            justify-content: center;
        }
        label{
            display: inline-block;
            width:200px;
        }
        textarea{
            width: 300px;
            height: 150px;
        }
    </style>

  </head>
  <body>

       @include('admin.header')

       @include('admin.sidebar')


      <!-- Sidebar Navigation end-->


      <div class="page-content">

          <div class="container-fluid">


            <h1>Update Product</h1>

            <div class="div_deg">


            <form action="{{ url('edit_product',$data->id) }}" method="post" enctype="multipart/form-data">

                @csrf

                <div>

                <label>Title</label>
                <input type="text" name="tiutle" value="{{ $data->title }}">
                </div>

                  <div>
                <label>Description</label>
                <textarea name="description">{{ $data->description }}</textarea>


                </div>




                  <div>
                <label>Price</label>
                <input type="text" name="price" value="{{ $data->price }}">
                </div>


                  <div>
                <label>Category</label>

                <select name="category">



                   @foreach ($category as $cat)
                       <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                   @endforeach






                </select>
                </div>




                  <div>
                <label>Quantity</label>
                <input type="number" name="quantity" value="{{ $data->quantity }}">
                </div>



                <div>
                <label>Current Image</label>
                <img src="/image/{{ $data->image }}" width="200px;">
                </div>



                <div>
                <label>Change Image</label>
                <input type="file" name="image">
                </div>


                <div>

                <input type="submit" value="update Product" class="btn btn-success">
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
