<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <link rel="stylesheet" href="{{asset('css/edit_category.css')}}"> <!-- Hubungkan file CSS -->

  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')  
    
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

                <div class = "div_dsgn">
                    <h1>Edit Kategori</h1>

                    <form action="{{url('change_category', $category_id->id)}}" method="post">
                        @csrf

                        <input type="text" name="category" value="{{$category_id->category_name}}" >
                        <input type="submit" value="Edit" class="btn btn-primary">
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
