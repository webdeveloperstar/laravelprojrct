

<!DOCTYPE html>
<html>
  <head>

    @include('admin.css')

    <style>
        input[type='text']
        {
            width: 300px;
            height: 45px;
            border: 1px solid black;
            border-radius: 5px;
            padding: 10px;
        }
        .div_deg{
            display: flex;
            align-items:center;
            justify-content: center;
            margin: 30px;
        }
        .table_deg{
            text-align: center;
            margin: auto;
            border: 1px solid skyblue;
            margin-top: 30px;
        }
        th{
            border: 1px solid skyblue;
            padding: 20px;
            background-color: pink;
            
        }
        td{
            border: 1px solid red;
            padding: 20px;
            text-align: center;
        }
    </style>

  </head>
  <body>

       @include('admin.header')

       @include('admin.sidebar')


      <!-- Sidebar Navigation end-->


      <div class="page-content">

          <div class="container-fluid">


            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
            @endif


             <h1>Add Category</h1>

          <div class="div_deg">


           <form action="{{ url('add_category') }}" method="post">
               @csrf
                <div>
                    <input type="text" name="category">
                    <input type="submit" value="Add Category" class="btn btn-warning">
                </div>

           </form>
          </div>


          <div>
            <table class="table_deg">
                <tr>
                    <th>Category Name</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>

                    @foreach ($data as $category)
                        <tr>
                            <td>{{ $category->category_name }}</td>

                           

                            <td>
                                <a href="{{ url('delete_category', $category->id) }}" 
                                    class="btn btn-danger" onclick="confirmation(event)">Delete</a>
                            </td>

                             <td>
                                <a href="{{ url('edit_category',$category->id) }}" class="btn btn-success">Edit</a>
                            </td>


                        </tr>
                    @endforeach

            </table>
          </div>



      </div>
    </div>
    <!-- JavaScript files-->

    <script type="text/JavaScript">

       function confirmation(ev) {
           ev.preventDefault();
           swal({
               title: "Are you sure?",
               text: "Once deleted, you will not be able to recover this imaginary file!",
               icon: "warning",
               buttons: true,
               dangerMode: true,
           })
           .then((willDelete) => {
               if (willDelete) {
                   swal("Poof! Your imaginary file has been deleted!", {
                       icon: "success",
                   });
               } else {
                   swal("Your imaginary file is safe!");
               }
           });
       }

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


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
