

<!DOCTYPE html>
<html>
  <head>

    @include('admin.css')
    <style>

      table{
        border: 1px solid red;
        text-align: center;
      }
      th{
        border: 1px solid skyblue;
        padding: 20px;
        background: skyblue;
      }
      td{
        border: 1px solid slateblue;
        padding: 20px;
      }
      .table_center{
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 20px;
      }

    </style>

  </head>
  <body>

       @include('admin.header')

       @include('admin.sidebar')





      <!-- Sidebar Navigation end-->


      <div class="page-content">

          <div class="container-fluid">


         <div class="table_center">
            <table>

           <tr>

              <th>Customer Name</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Title</th>
              <th>Price</th>
              <th>Image</th>
              <th>Status</th>
              <th>Change Status</th>

           </tr>

           @foreach($data as $data)
           <tr>
               <td>{{ $data->name }}</td>
               <td>{{ $data->rec_address }}</td>
               <td>{{ $data->phone }}</td>

               <td>{{ $data->product->title }} </td>
               <td>{{ $data->product->price }}</td>
               <td>
                   <img src="/image/{{ $data->product->image }}" alt=""
                   style="width: 100px; height: 100px;">
               </td>

               <td>

                 @if($data->status == 'in progress')

                     <span style="color:red;">
                        {{ $data->status }}
                     </span>

                     @else

                     <span>
                        {{ $data->status }}
                     </span>

                 @endif

               </td>

               <td>
                   <a href="{{ url('on_the_way',$data->id) }}" class="btn btn-primary"> On the way</a>
                   <a href="{{ url('delivered',$data->id) }}" class="btn btn-success"> Delivered</a>
               </td>

           </tr>
           @endforeach

         </table>
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
