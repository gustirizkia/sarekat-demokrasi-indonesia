<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset("custom/auth.css") }}">
    <!-- Primary Meta Tags -->
    <title>Bergabung Bersama Sarekat Demokrasi Indonesia</title>
    <meta name="title" content="Bergabung Bersama Sarekat Demokrasi Indonesia" />
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

    <style>
        *{
            background-color: #FFF6F6;
        }
    </style>

  </head>
  <body>

    <main>
        <div class="container">
            <form action="{{ route("prosesRegister") }}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="row justify-content-center mt-md-5 mt-4">
                    <div class="col-md-5 pb-5">
                        <div class="mb-2 d-flex align-items-center">
                            <img src="{{ asset("images/logo_circle.png") }}" alt="LOGO SDI" class="img-fluid" style="width: 60px">
                            <div class="color__primary ms-2" style="font-size: 18px; font-style: normal; font-weight: 400;">Sarekat Demokrasi Indonesia</div>
                        </div>
                        <h1 class="h2">Ayo Bergabung Bersama SDI!</h1>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="mt-5">
                            <div class="mb-4">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama">
                            </div>
                            <div class="mb-4">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="mb-4">
                                <label for="">Nomor Telepon</label>
                                <input type="number" class="form-control" name="nomor_telepon" placeholder="Nomor Telepon">
                            </div>
                            <div class="mb-4">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="mb-4">
                                <input type="file" name="foto_diri" id="foto_diri" hidden>
                                <label for="">Foto Diri</label>
                                <div class="img_foto_diri">
                                    <img src="{{ asset("images/foto_diri.png") }}" class="img-fluid" alt="" style="width: 40%">
                                </div>
                            </div>
                            <div class="mb-4">
                                <input type="file" name="foto_ktp" id="foto_ktp" hidden>
                                <label for="">Foto KTP</label>
                                <div class="img_foto_ktp">
                                    <img src="{{ asset("images/ktp_vector.png") }}" class="img-fluid" alt="" style="width: 60%">
                                </div>
                            </div>

                            <div class="mt-5">
                                <button type="submit" class="btn btn__primary w-100">
                                    Daftar
                                </button>
                                <a href="/login" class="btn btn__outline__primary mt-4 w-100">
                                    Masuk
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script>
        $(".img_foto_ktp").on("click", function(){
            $("#foto_ktp").click();
        });
        $(".img_foto_diri").on("click", function(){
            $("#foto_diri").click();
        });

        $("#foto_ktp").on("change", function(e){
            let file = e.target.files[0];

             var reader = new FileReader();
            reader.onload = function(){
                $(".img_foto_ktp img").attr("src", reader.result)
            };
            reader.readAsDataURL(file);
        });
        $("#foto_diri").on("change", function(e){
            let file = e.target.files[0];

             var reader = new FileReader();
            reader.onload = function(){
                $(".img_foto_diri img").attr("src", reader.result)
            };
            reader.readAsDataURL(file);
        });



    </script>
  </body>
</html>
