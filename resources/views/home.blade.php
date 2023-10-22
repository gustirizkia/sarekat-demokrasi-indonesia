@extends('layouts.front')

@push('addStyle')
    <style>
        *{
            font-family: 'Roboto', sans-serif;
        }
        .header{
            background: linear-gradient(0deg, rgba(192, 2, 2, 0.103) 0%, rgba(192, 2, 2, 0.144) 100%), url('{{ asset("images/demo.png") }}'), lightgray 0px -350.684px / 100% 177.975% no-repeat;
            background-size: cover;
            min-height: 600px;
        }
        .header h1{
            color: #FFF;
            font-size: 50px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }
        .header h1 span{
            color: #FE0000;
        }
        .header p{
            color: #FFF;
            text-align: justify;
            font-family: Roboto;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }
        .header img{
            position: absolute;
            bottom: 0;
            right: 0;
            max-height: 582px;
        }
        .card__item{
            margin-top: -80px;
        }
        .card__item .card{
            border: unset;
            padding: 1.5rem;
            border-radius: 20px;
        }
        .card__item .card img{
            height: 90px;
        }
        .video .quotes{
            font-size: 48px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
        }
        .video .quotes span.p{
            font-size: 96px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
        }
        .list-video .item img{
            background-position: center;
            border-radius: 16px 95px 15px 113px;

        }
        .list-video .button{
            position: absolute;
            top: 50%;
            right: 50%;
            cursor: pointer;
        }
        .selayang_pandang{
            background: #ECF4FF;
        }

        .selayang_pandang p{
            color: #00204A;
            text-align: justify;
            font-size: 20px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }
    </style>
@endpush

@section('content')
    {{-- Header --}}
    <div class="header d-flex justify-content-center flex-column align-items-center position-relative" >
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-md-start text-center">
                    <h1 >
                        Transformation of <span>Democracy for the next</span> civilization.
                    </h1>
                    <p class="text-white">
                        Sarekat Demokrasi Indonesia lahir sebagai muara gerakan pemikiran, demokrasi kita di masa depan yang berakar pada konsepsi dan argumentasi.
                    </p>

                    <a href="" class="btn btn__white">Pendaftaran Anggota</a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset("images/andrean.png") }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
    {{-- Header end --}}

    <section class="card__item">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <img src="{{ asset("images/sdi-2tahun.png") }}" alt="2 tahun sdi" class="img-fluid">
                                </div>
                                <div class="col-md-4 text-center">
                                    <img src="{{ asset("images/lembaga-kajian.png") }}" alt="2 tahun sdi" class="img-fluid">
                                </div>
                                <div class="col-md-4 text-center">
                                    <img src="{{ asset("images/lbh.png") }}" alt="2 tahun sdi" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="video mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="">
                        <svg width="63" height="12" viewBox="0 0 63 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="30" height="12" rx="2" fill="url(#paint0_linear_26_40)"/>
                        <rect x="33" width="30" height="12" rx="2" fill="url(#paint1_linear_26_40)"/>
                        <defs>
                        <linearGradient id="paint0_linear_26_40" x1="-8.73065" y1="0" x2="25.1703" y2="0" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#B20000"/>
                        <stop offset="1" stop-color="#B20000" stop-opacity="0"/>
                        </linearGradient>
                        <linearGradient id="paint1_linear_26_40" x1="24.2694" y1="0" x2="58.1703" y2="0" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#B20000"/>
                        <stop offset="1" stop-color="#B20000" stop-opacity="0"/>
                        </linearGradient>
                        </defs>
                        </svg>
                    </div>
                    <div class="quotes color__dark">
                        <span class="color__primary">“<span class="p">P</span>olitik</span> bukan teknik untuk Berkuasa, Melainkan etika untuk mengabdi”
                        <br>
                        - Johannes Leimena
                    </div>

                    {{-- Video --}}
                    <div class="list-video mt-5">
                        <div class="item position-relative">
                            <img src="{{ asset("images/video.png") }}" alt="" class="img-fluid">
                            <div class="button">
                                <svg width="84" height="84" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="42" cy="42" r="42" fill="white" fill-opacity="0.5"/>
                                    <path d="M62.6517 36.7784C63.6629 37.3149 64.5087 38.1158 65.0986 39.0952C65.6884 40.0747 66 41.1959 66 42.3385C66 43.4812 65.6884 44.6024 65.0986 45.5818C64.5087 46.5613 63.6629 47.3622 62.6517 47.8987L35.6782 62.5334C31.3349 64.8902 26 61.8234 26 56.9753V27.7039C26 22.8516 31.3349 19.7869 35.6782 22.1416L62.6517 36.7784Z" fill="#B20000"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    {{-- Video end --}}
                </div>
            </div>
        </div>
    </section>

    <section class="selayang_pandang mt-5 py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-md-6">
                    <img src="{{ asset("images/selayang_pandang.png") }}" class="img-fluid" alt="Selayang pandang SDI">
                </div>
                <div class="col-md-6 d-flex justify-content-center flex-column">
                    <svg width="63" height="13" viewBox="0 0 63 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect y="0.492676" width="30" height="12.0032" rx="2" fill="url(#paint0_linear_26_41)"/>
                    <rect x="33" y="0.492676" width="30" height="12.0032" rx="2" fill="url(#paint1_linear_26_41)"/>
                    <defs>
                    <linearGradient id="paint0_linear_26_41" x1="-8.73065" y1="0.492676" x2="25.1703" y2="0.492676" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#B20000"/>
                    <stop offset="1" stop-color="#B20000" stop-opacity="0"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_26_41" x1="24.2694" y1="0.492676" x2="58.1703" y2="0.492676" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#B20000"/>
                    <stop offset="1" stop-color="#B20000" stop-opacity="0"/>
                    </linearGradient>
                    </defs>
                    </svg>
                    <h1 class="h2 mb-0 mt-2">
                        SELAYANG PANDANG
                    </h1>
                    <h1 class="h2 color__primary">
                        SAREKAT DEMOKRASI INDONESIA
                    </h1>
                    <div class="">
                        <p class="mt-3">
                            SAREKAT DEMOKRASI INDONESIA, adalah organisasi perjungan yang didirikan pada tanggal 12 Mei 2021 di Jakarta – Indonesia. Yang diprakarsai oleh sejumlah Aktivis, Intelektual dan tokoh seperti M. Andrean Saefudin sebagia Ketua Umum pertama dan Salsabila Syaira sebagai Sekertaris Jenderal. Sarekat Demokrasi Indonesia, yang mana anggota sekaligus deklarator memiliki latar belakang Intelektual, Profesional, Akademisi dan juga Aktivis. Sarekat Demokrasi Indonesia adalah Organisasi Payung dari organisasi Intelektual, Profesional, Akademisi, Aktivis, dan Sarekat lintas sektoral; Petani, Buruh, Budayawan, Pemuda, Mahasiswa dan Rakyat Kebanyakan): dan sebagai satu-satunya alat perjuangan sosial – demokrat.
                        </p>

                        <a href="/register" class="btn btn__primary mt-5 ">
                            Gabung SDI
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
