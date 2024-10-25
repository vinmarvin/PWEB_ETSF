<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <link rel="stylesheet" href="{{asset('css/add_product.css')}}"> <!-- Hubungkan file CSS -->
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')  
    
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h1 style="color: white">Tambahkan Produk</h1>
          
            <div class="div_desgn">
            <form action="{{url('upload_product')}}" method="Post" enctype="multipart/form-data">

                    @csrf

                    <div class="namaproduk">
                        <label>Nama Produk</label>
                        <input type="text" name="p_title" required>
                    </div>

                    <div class="description">
                        <label>Deskripsi</label>
                        <textarea name="description" required></textarea>
                    </div>

                    <div>
                        <label>Harga</label>
                        <input type="text" name="price">
                    </div>

                    <div>
                        <label>Jumlah Produk</label>
                        <input type="number" name="qty">
                    </div>

                    <div>
                        <label>Kategori Produk</label>
                        <select name="category" required>
                            <option>Pilih Kategori</option>
                            @foreach($category as $category_data)
                            <option value="{{$category_data->category_name}}">{{$category_data->category_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label>Tampilan Produk</label>
                        <input type="file" name="p_image">
                    </div>

                    <div class="input_dsg">
                        <input class="btn btn-success"type="submit" value="Tambahkan">
                    </div>

            </form>

          </div>

          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('/adminui/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/adminui/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('/adminui/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/adminui/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/adminui/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/adminui/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/adminui/js/charts-home.js')}}"></script>
    <script src="{{asset('/adminui/js/front.js')}}"></script>
  </body>
</html>
\