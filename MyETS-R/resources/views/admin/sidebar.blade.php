<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{asset('adminui/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">You</h1>
            <p>Warehouse Admin</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="{{ url('admin/dashboard') }}"> <i class="icon-home"></i>Homepage</a></li>

                <li><a href="{{url('view_cat')}}"> <i class="icon-grid"></i>Kategori</a></li>

                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Produk</a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('add_product')}}">Tambahkan Produk</a></li>
                    <li><a href="{{url('view_product')}}">Lihat Produk</a></li>
                    <li><a href="#"></a></li>
                  </ul>
                </li>
      </nav>
      <!-- Sidebar Navigation end-->