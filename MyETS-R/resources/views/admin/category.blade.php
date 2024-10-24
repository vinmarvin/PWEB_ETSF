<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <link rel="stylesheet" href="{{asset('css/category.css')}}"> <!-- Hubungkan file CSS -->
  </head>

  <body>
    @include('admin.header')
    @include('admin.sidebar')  
    
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
          <h1 style="color:white;">Tambahkan Kategori</h1>
          
            <div class ="div_dsgn">
                    
            <form action="{{url('add_category')}}" method ="post">
                @csrf

                <div>
                    <input type="text" name="category" required>
                
                    <input type="submit" value="Tambahkan" class="btn btn-add" name="addcategory">
                </div>
            </form>
            </div>

            <div>
                <table class = "table_dsg">
                  <tr>
                    <th>Nama Kategori</th>
                    <th>Edit</th>
                    <th>Hapus</th>


                  </tr>

                @foreach($category_data as $data)

                  <tr>
                    <td>{{$data->category_name}}</td>
                    <td><a href="{{url('edit_category', $data->id)}}" class="btn btn-warning">Edit</a></td>
                    <td><a class = "btn btn-danger" href="{{url('delete_category', $data->id)}}" onclick ="confirmation(event)">X</a></td>
<!--delete_category function gets the Id of each item-->
                  </tr>
                @endforeach
                </table>

            </div>

          </div>
      </div>
    </div>
    <!-- JavaScript files-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"> 
    </script>

    <script type = "text/javascript">
        function confirmation (ev){
          ev.preventDefault();

          var urlRedirect = ev.currentTarget.getAttribute('href')
          console.log (urlRedirect);

        swal({

            title: "Apakah Anda mau Menghapus Kategori Ini",
            text: "Tindakan ini akan bersifat permanen dan tidak bisa dibatalkan",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })

          .then((willCancel) =>{
            if (willCancel){
              window.location.href=urlRedirect;
            }


          });

        }

    </script>
        
    <script>


    @if ($errors->any())
        toastr.error("{{ $errors->first('category') }}", "Error");
    @endif
  </script>

    <script src="{{asset('/adminui/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/adminui/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('/adminui/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/adminui/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/adminui/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/adminui/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/adminui/js/charts-home.js')}}"></script>
    <script src="{{asset('/adminui/js/front.js')}}"></script>

    <script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "5000"
    };
    </script>

  </body>
</html>