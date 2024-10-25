<style>
  .btn-danger {
    background-color: #B23B3B; /* Warna tombol saat normal */
    color: white;
    border: none;
}

.btn-danger:hover {
    background-color: #922a2a; /* Warna tombol saat di-hover (lebih gelap) */
    color: white;
}
</style>

<!-- header section strats -->
<header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="{{url('/')}}">
          <span class= "great-vibes-regular">
            Panganku
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="loadPage('shop.html'); return false;">Belanja</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="loadPage('why.html'); return false;">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="loadPage('testimonial.html'); return false;">Testimoni</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="loadPage('contact.html'); return false;">Hubungi Kami</a>
            </li>

          </ul>
          <div class="user_option">

          @if (Route::has('login'))

            @auth

            <a href="#" id="shopping-bag">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </a>

            <form style="padding:15px; background-color:"method="POST" action="{{ route('logout') }}">
                            @csrf

                            <input class="btn btn-danger" type="submit" value="Log Out">
                        </form>


            @else
            <a href="{{url('/login')}}">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Login
              </span>
            </a>

            <a href="{{url('/register')}}">
              <i class="fa fa-vcard" aria-hidden="true"></i>
              <span>
                Register
              </span>
            </a>

            @endauth

          @endif  


          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->

    <script>
  // Ambil elemen berdasarkan ID
  document.getElementById("shopping-bag").addEventListener("click", function(event) {
    event.preventDefault(); // Menghentikan default action (berpindah halaman)
    alert("Peringatan: Fitur ini belum tersedia!");
  });


  function loadPage(pageUrl) {
    fetch(pageUrl)
      .then(response => {
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        return response.text();
      })
      .then(html => {
        document.getElementById('content-area').innerHTML = html;
      })
      .catch(error => {
        console.error('Error loading the page:', error);
        document.getElementById('content-area').innerHTML = "<p>Halaman tidak dapat dimuat.</p>";
      });
  }

</script>


