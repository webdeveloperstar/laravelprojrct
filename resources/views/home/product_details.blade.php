

<!DOCTYPE html>
<html>

<head>

   @include('home.css')

   <style>
        .div_center{
            text-align: center;
        }
        .detail-box{
            padding: 20px;
        }
   </style>

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->


          @include('home.header')

    <!-- end header section -->
    <!-- slider section -->


</div>





<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">


        <h2>
          Latest Products
        </h2>


      </div>

      <!-- product details start here -->

      <div class="row">


          <div class="col-md-10">
          
            <div class="box">

                <div class="div_center">
                  <img src="/image/{{ $data->image }}" alt="">
                </div>


                <div class="detail-box">
                  <h6>
                    {{ $data->title }}
                  </h6>
                  <h6>
                    Price
                  <span>
                    ${{ $data->price }}
                  </span>
                </h6>
              </div>


             <div class="detail-box">
                  <h6> Category :
                    {{ $data->category }}
                  </h6>
                  <h6> Available Quantity :

                  <span>
                    {{ $data->quantity }}
                  </span>
                </h6>
              </div>


              <div class="detail-box">
                <p>{{ $data->description }}</p>
              </div>


              <div class="new">
                <span>
                  New
                </span>
              </div>

          </div>
        </div>



      </div>

    </div>
  </section>



  <!-- info section -->

 @include('home.footer')

  <!-- end info section -->


  @include('home.js')

</body>

</html>
