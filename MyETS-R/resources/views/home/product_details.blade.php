<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <style>
    .div_center{
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 25px;
    }
    .detail-box{
        padding: 10px;
    }
  </style>
</head>

<body>
  <div class="hero_area">
        @include('home.header')

        <!-- Product start -->
        <style>
  .btn-primary:hover{
    background-color: #04b8f4;
  }
</style>

<!-- shop section -->

<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
      </div>
      <div class="row">

      <div class="col-md-12">
          <div class="box">
          <h5 style="text-align: center";>{{$fetch_data->title}}</h5>
              <div class="div_center">
                <img width = "350px" src="/products/{{$fetch_data->image}}" alt="">
              </div>



              <div class="detail-box">
                <h6>Price
                  <span>Rp{{$fetch_data->price}}</span>
                </h6>
              </div>

              <div class="detail-box">
                <h6>Kategori: {{$fetch_data->category}}</h6>
                <h6>Jumlah: 
                  <span>{{$fetch_data->quantity}}</span>
                </h6>
              </div>

              <div class="detail-box">
                  <p>{{$fetch_data->desc}}</p>

              </div>
            
              <div>
              </div>

          </div>
        </div>


        </div>
      </div>

    </div>
  </section>

  <!-- end shop section -->
<!-- Product end -->


        @include ('home.info')
  </div>
  
  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="{{asset('js/custom.js')}}"></script>

</body>

</html>