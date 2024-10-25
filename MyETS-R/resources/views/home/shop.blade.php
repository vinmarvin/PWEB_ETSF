<style>
  .btn-primary:hover{
    background-color: #04b8f4;
  }
</style>

<!-- shop section -->

<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Produk Kami
        </h2>
      </div>
      <div class="row">

      @foreach($product_cust as $customer_view)        
      <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            
              <div class="img-box">
                <img src="products/{{$customer_view->image}}" alt="">
              </div>
              <div class="detail-box">
                <h6>{{$customer_view->title}}</h6>
                <h6>Price
                  <span>Rp{{$customer_view->price}}</span>
                </h6>
              </div>
            
              <div>
                <a href="{{url('products_details', $customer_view->id)}}" class="btn btn-primary">Detail Produk</a>
              </div>

          </div>
        </div>

        @endforeach

        </div>
      </div>

    </div>
  </section>

  <!-- end shop section -->