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