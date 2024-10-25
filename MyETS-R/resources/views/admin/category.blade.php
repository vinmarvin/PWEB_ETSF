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

  @include ('admin.js')
  </body>
</html>