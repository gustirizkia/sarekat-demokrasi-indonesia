<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("custom/main.css") }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Primary Meta Tags -->
    <title>@yield('title', "SAREKAT DEMOKRASI INDONESIA")</title>
    <meta name="title" content="SAREKAT DEMOKRASI INDONESIA" />
    <meta name="description" content="Sarekat Demokrasi Indonesia lahir sebagai muara gerakan pemikiran, demokrasi kita di masa depan yang berakar pada konsepsi dan argumentasi." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url("/") }}" />
    <meta property="og:title" content="SAREKAT DEMOKRASI INDONESIA" />
    <meta property="og:description" content="Sarekat Demokrasi Indonesia lahir sebagai muara gerakan pemikiran, demokrasi kita di masa depan yang berakar pada konsepsi dan argumentasi." />
    <meta property="og:image" content="{{ asset("images/logo.png") }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://metatags.io/" />
    <meta property="twitter:title" content="SAREKAT DEMOKRASI INDONESIA" />
    <meta property="twitter:description" content="Sarekat Demokrasi Indonesia lahir sebagai muara gerakan pemikiran, demokrasi kita di masa depan yang berakar pada konsepsi dan argumentasi." />
    <meta property="twitter:image" content="{{ asset("images/logo.png") }}" />
    <!-- Meta Tags Generated with https://metatags.io -->
    <link rel="icon" type="image/x-icon" href="{{ asset("images/logo.png") }}">
    @stack('meta-tag')
    @stack('addStyle')

    <style>
      a{
        text-decoration: unset;
      }
      footer{
        color: white;
      }
      footer img{
        width: 70px;
      }
      footer a{
        color: white;
      }
    </style>

  </head>
  <body>
    @include('includes.navbar')

    <main>
        @yield('content')
    </main>

    <footer class="bg__primary py-5">
      <div class="container">

        <div class="row">
          <div class="col-md-4">
    
            <div class="d-flex align-items-center">
              <img src="{{asset("images/logo_circle.png")}}" class="img-fluid" alt="LOGO Sarekat Demokrasi Indonesia png">
              <p class="color-white ms-2 mb-0">SAREKAT DEMOKRASI INDONESIA</p>
            </div>
            <p class="mt-3">
              Jl. Jati Padang Raya No. 05 Pasar Minggu 
              Jakarta Selatan.
            </p>
          </div>
          <div class="col-md-3">
            <a href="">
              > Kontak Kami
            </a>
            <div class="mt-3">
              <a href="" class="">
                > Pendidikan dan Pelatihan
              </a>
            </div>
            
            <div class="mt-3">
              <a href="" class="">
                > Pendidikan dan Pelatihan
              </a>
            </div>
          </div>
        </div>

      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (Session::get("success"))
        <script>
            Swal.fire({
                icon: "success",
                title: "{{ Session::get("success") }}"
            });
        </script>
    @endif
    @stack('addScript')
  </body>
</html>
