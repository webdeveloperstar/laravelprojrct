<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @include('home.css')

    <style>
        .div_center{
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        table{
            border: 1px solid red;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        th{
            border: 1px solid skyblue;
            padding: 20px;
            background: skyblue;
        }
        td{
            border: 1px solid skyblue;
            padding: 20px;
        }
    </style>

</head>
<body>

      <div class="hero_area">
    <!-- header section strats -->


          @include('home.header')


          <div class="div_center">
            <table>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Delivery Status</th>
                    <th>Image</th>
                </tr>

                @foreach ($order as $order)

                <tr>
                    <td>{{ $order->product->title }}</td>
                    <td>{{ $order->product->price }}</td>
                    <td>{{ $order->status }}</td>

                    <td>
                        <img src="image/{{ $order->product->image }}" width="200px;">
                    </td>

                </tr>

                @endforeach
            </table>
          </div>



      </div>


      @include('home.footer')

</body>
</html>
