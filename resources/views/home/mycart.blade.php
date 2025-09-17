

<!DOCTYPE html>
<html>

<head>

   @include('home.css')

   <style>
    .div_center{
        display: flex;
        justify-content: center;
        align-items: center;

    }
    th{
        border: 1px solid blue;
        padding: 20px;
        background: skyblue;


    }
    td{
        border: 1px solid red;
        padding: 20px;
        text-align: center;
    }
    .order_deg{
        padding-right: 100px;
        margin-top: 100px;
    }
    label{
        display: inline-block;
        width: 200px;
    }
   </style>

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->


          @include('home.header')


    <!-- end header section -->
    <!-- slider section -->



    <!-- end slider section -->
  </div>


  <div class="div_center">


    <div class="order_deg">
        <form action="{{ url('confirm_order') }}" method="post">
            @csrf
            <div>
                <label>Receiver Name</label>
                <input type="text" name="name" value="{{ Auth::user()->name }}">
            </div>
            <div>
                <label>Receiver Address</label>
                <textarea name="address" style="height: 100px; width: 300px;">{{ Auth::user()->address }}</textarea>
            </div>
            <div>
                <label>Phone</label>
                <input type="number" name="phone" value="{{ Auth::user()->phone }}">
            </div>
            <div>

                <input type="submit" value="Place Order" class="btn btn-primary">
            </div>
        </form>
    </div>


    <table style="width:50%;">
        <tr>
            <th>Product Title</th>

            <th>Product Price</th>

            <th>Product Image</th>

            <th>Remove</th>
        </tr>


        <?php

          $value = 0;

        ?>

       @foreach ($cart as $cart)
           <tr>
               <td>{{ $cart->product->title }}</td>
               <td>{{ $cart->product->price }}</td>
               <td><img src="/image/{{ $cart->product->image }}"
                alt="{{ $cart->product->title }}" width="200px;"></td>

                <td>
                    <a href="{{ url('delete_cart',$cart->id) }}"
                        class="btn btn-primary">Remove</a>
                </td>


           </tr>

           <?php

             $value = $value + $cart->product->price;


           ?>



       @endforeach
    </table>
  </div>

        <div style="text-align: center; padding: 50px;">
            <h2>Total Value of Cart is : {{ $value }}</h2>
        </div>


  <!-- end hero area -->

  <!-- shop section -->



  <!-- end shop section -->







  <!-- contact section -->



  <br><br><br>

  <!-- end contact section -->



  <!-- info section -->

 @include('home.footer')

  <!-- end info section -->


  @include('home.js')

</body>

</html>
