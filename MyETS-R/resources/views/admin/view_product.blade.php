<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <link rel="stylesheet" href="{{asset('css/view_product.css')}}"> <!-- Hubungkan file CSS -->

  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')  
    
      <div class="page-content">
        <div class="page-header">
         <div class="container-fluid">
         
         <div>
         <h1 font-size="25px">Cari Produk</h1>
         <form action="{{url('search_product')}}" method="get">
          <input type="search"  placeholder="Masukkan nama produk" name="search">
          <input type="submit" class="btn btn-secondary" value="Cari" >
         </form>
         </div>

         <div class="div_design">
        <table class = "table_design">
            <tr>

                <th>Nama Produk</th>
                <th>Deskripsi Produk</th>
                <th>Harga Produk</th>
                <th>Jumlah Produk</th>
                <th>Kategori Produk</th>
                <th>Tampilan Produk</th>
                <th>Hapus Produk</th>


            </tr>

            <tr>
                @foreach($product_view as $product)
                <td>{{$product->title}}</td>
                <td>{!!Str::limit($product->desc, 25)!!}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->category}}</td>
                <td>{{$product->quantity}}</td>
                <td><img height="120" 
                     width="120" 
                    src="{{ $product->image ? asset('products/'.$product->image) : asset('products/defaultimage.png') }}" 
                    alt="{{ $product->image ?? 'No Image Found' }}">
        </td>

        <td>
          <a class="btn btn-danger" onclick ="confirmation(event)" href="{{url('delete_product', $product->id)}}">X</a>
        </td>
            </tr>
                @endforeach

        </table>

         </div>
         <div class= "div_design">{{$product_view->onEachSide(2)->links()}}</div>
         

         </div>
      </div>
    </div>
    
    @include ('admin.js')

  </body>
</html>
