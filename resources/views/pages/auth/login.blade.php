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
        .lupa_password{
            color: #B20000;
            text-align: right;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            text-decoration: unset;
        }
        .eye{
            position: absolute;
            top: 0;
            right: 0px;
            padding: 10px 20px;
            background-color: transparent;
        }
        .eye i{
            background-color: transparent;
            line-height: 0;
        }
    </style>

  </head>
  <body>

    <main style="min-height: 100vh" class="d-flex flex-column justify-content-center">
        <div class="container">
            <form action="{{ route("prosesLogin") }}" method="post" >
            @csrf
                <div class="container">
                    <div class="row justify-content-center gx-5">
                        <div class="col-md-4 ">
                            <div class="h-100 d-flex align-items-center">
                                <img src="{{ asset("images/sekjend_sdi.png") }}" class="img-fluid" alt="Sekjend SDI">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset("images/logo.png") }}" width="80" class="img-fluid" alt="Logo SDI">
                            <div class="mt-3">
                                <div class="mb-4">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control @error("email") is-invalid @enderror" name="email">
                                    @error('email')
                                         <small class="text-danger fw-bold">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Password</label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" name="password">
                                        {{-- <div class="eye">
                                            <i class="bi bi-eye"></i>
                                        </div> --}}
                                    </div>
                                    <div class="text-end mt-2">
                                        <a href="" class="lupa_password ">Lupa Password?</a>
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <button type="submit" class="btn btn__primary w-100">
                                        Masuk
                                    </button>
                                    <a href="/register" class="btn btn__outline__primary mt-4 w-100">
                                        Daftar
                                    </a>
                                </div>
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
