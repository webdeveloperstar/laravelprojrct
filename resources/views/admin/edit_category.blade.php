

<!DOCTYPE html>
<html>
  <head>

    @include('admin.css')

    <style>
        .div_deg{
            display: flex;
            align-items:center;
            justify-content: center;
            margin: 30px;
        }
         input[type='text']
        {
            width: 300px;
            height: 45px;
            border: 1px solid black;
            border-radius: 5px;
            padding: 10px;
        }
    </style>

  </head>
  <body>

       @include('admin.header')

       @include('admin.sidebar')


      <!-- Sidebar Navigation end-->


      <div class="page-content">
       
          <div class="container-fluid">

            
            <h1>Update category</h1>

            <div class="div_deg">
                
            


            <form action="{{ url('update_category', $data->id) }}" method="post">
                @csrf
               
                <input type="text" name="category" value="{{ $data->category_name }}">
                <input type="submit" value="Update Category" class="btn btn-warning">
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
