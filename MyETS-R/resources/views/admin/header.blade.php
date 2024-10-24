<style>

input[type="submit"].btn-logout {
        margin-left: 10px; /* Beri sedikit jarak di antara input dan tombol */
        height: 30px; /* Samakan tinggi tombol dengan text box */
        padding: 0 20px;
        background-color: #f05a5a; /* Warna tombol chili red */
        border: none;
        border-radius: 5px;
        color: white;
        cursor: pointer;
    }

    input[type="submit"].btn-logout:hover {
        margin-left: 10px; /* Beri sedikit jarak di antara input dan tombol */
        height: 30px; /* Samakan tinggi tombol dengan text box */
        padding: 0 20px;
        background-color: #e23e3e; /* Warna tombol chili red */
        border: none;
        border-radius: 5px;
        color: white;
        cursor: pointer;
    }

</style>


<header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="index.html" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Dark</strong><strong>Admin</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          
            <!-- Log out -->
            <div class="list-inline-item logout">
                
            <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <input type="submit" class="btn btn-logout"value="Log Out">
                            
            </form>

              </div>
          </div>
        </div>
      </nav>
    </header>