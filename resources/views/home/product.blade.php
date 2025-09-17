
<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">




          @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
            @endif




        <h2>
          Latest Products
        </h2>


      </div>

      <div class="row">

        @foreach ($product as $item)
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="box">

                <div class="img-box">
                  <img src="image/{{ $item->image }}" alt="">
                </div>
                <div class="detail-box">
                  <h6>
                    {{ $item->name }}
                  </h6>
                  <h6>
                    Price
                  <span>
                    ${{ $item->price }}
                  </span>
                </h6>
              </div>


                <div>

                     <a href="{{ url('product_details',
                     $item->id) }}" class="btn btn-success">Details</a>


                     <a href="{{ url('add_cart',$item->id) }}" class="btn btn-warning">Add To Cart</a>

                </div>



              <div class="new">
                <span>
                  New
                </span>
              </div>

          </div>
        </div>

        @endforeach

      </div>

    </div>
  </section>
