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

        .berita_terkini{
            background: linear-gradient(180deg, #ECF4FF 0%, rgba(217, 217, 217, 0.00) 100%);
            min-height: 300px;
        }

        .card__artikel{
            border-radius: 17px;
            border: unset;
            background: #FFF;
        }

        .card__artikel img{
            border-radius: 18px 18px 0px 0px;
            height: 200px;object-fit: cover;
            object-position: center;
        }
        .card__artikel .title{
            color: #000;
            font-size: 16px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }
        .card__artikel .kategori{
            border-radius: 100px;
            color: white;
            background: #B20000;
            display: inline-block;
            font-size: 12px;
        }

        .badge.text-bg-sdi{
            color: white;
            background: #B20000;
        }

        .card__artikel .tanggal{
            color: #B20000;
            text-align: right;
            font-size: 12px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

        .btn-white{
            border-color: white;
            background-color: white;
            color: #B20000;
            border-radius: 100px;
        }
        .btn-outline-white{
            border-color: white;
            color: white;
            border-radius: 100px;
        }
        .visi_misi{
            color: white;
        }
        .kategori__visi__misi{
            overflow-x: auto;
            white-space: nowrap
        }

        @media (max-width: 767.98px) {
            .img__header{
                display: none;
            }

            .card__item {
                margin-top: -37px;
            }
            .card__item .card img{
                height: 40px;
            }
            .card__item .card{
                padding: unset;
            }

            .video .quotes {
                font-size: 18px;
            }

            .video .quotes span.p {
                font-size: 32px;
            }

            .list-video .item img {
                background-position: center;
                border-radius: 16px 20px 15px 20px;
            }
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
                    <div class="col-md-6 img__header">
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
                                <div class="col-4 text-center">
                                    <img src="{{ asset("images/sdi-2tahun.png") }}" alt="2 tahun sdi" class="img-fluid">
                                </div>
                                <div class="col-4 text-center">
                                    <img src="{{ asset("images/lembaga-kajian.png") }}" alt="2 tahun sdi" class="img-fluid">
                                </div>
                                <div class="col-4 text-center">
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

    <section class="berita_terkini pb-5">
        <div class="container">
            <div class="mb-4 ">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="h2">
                        BERITA TERKINI
                    </h1>

                    <div class="">
                        Lihat Semua
                    </div>
        
                </div>
                <svg width="126" height="13" viewBox="0 0 126 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect y="0.683228" width="30" height="12.0032" rx="2" fill="url(#paint0_linear_29_44)"/>
                    <rect x="33" y="0.683228" width="30" height="12.0032" rx="2" fill="url(#paint1_linear_29_44)"/>
                    <rect x="63" y="0.683228" width="30" height="12.0032" rx="2" fill="url(#paint2_linear_29_44)"/>
                    <rect x="96" y="0.683228" width="30" height="12.0032" rx="2" fill="url(#paint3_linear_29_44)"/>
                    <defs>
                    <linearGradient id="paint0_linear_29_44" x1="-8.73065" y1="0.683228" x2="25.1703" y2="0.683228" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#B20000"/>
                    <stop offset="1" stop-color="#B20000" stop-opacity="0"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_29_44" x1="24.2694" y1="0.683228" x2="58.1703" y2="0.683228" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#B20000"/>
                    <stop offset="1" stop-color="#B20000" stop-opacity="0"/>
                    </linearGradient>
                    <linearGradient id="paint2_linear_29_44" x1="54.2694" y1="0.683228" x2="88.1703" y2="0.683228" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#B20000"/>
                    <stop offset="1" stop-color="#B20000" stop-opacity="0"/>
                    </linearGradient>
                    <linearGradient id="paint3_linear_29_44" x1="87.2694" y1="0.683228" x2="121.17" y2="0.683228" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#B20000"/>
                    <stop offset="1" stop-color="#B20000" stop-opacity="0"/>
                    </linearGradient>
                    </defs>
                </svg>

            </div>
                

            <div class="row justify-content-center">

                @foreach ($berita as $itemBerita)
                    <div class="col-md-4 mb-3">
                        <a href="{{route("detail-berita", $itemBerita->slug)}}">
                            <div class="card card__artikel">
                                <img src="{{asset("storage/".$itemBerita->image)}}" alt="Berita sarekat demokrasi indonesia" class="img-fluid">
                                <div class="card-body">
                                    <span class="badge rounded-pill text-bg-sdi">{{ $itemBerita->kategori->nama }}</span>
                                    <div class="title mt-2">
                                        {{$itemBerita->judul_berita}}
                                    </div>
                                    <div class="tanggal mt-2 text-end d-flex align-items-center justify-content-end">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.5 12.5586C7.87913 12.5586 9.20177 12.0106 10.177 11.0352C11.1521 10.0597 11.7 8.73673 11.7 7.35723C11.7 5.97773 11.1521 4.65473 10.177 3.67928C9.20177 2.70382 7.87913 2.15582 6.5 2.15582C5.12087 2.15582 3.79823 2.70382 2.82304 3.67928C1.84786 4.65473 1.3 5.97773 1.3 7.35723C1.3 8.73673 1.84786 10.0597 2.82304 11.0352C3.79823 12.0106 5.12087 12.5586 6.5 12.5586ZM6.5 0.855469C7.35359 0.855469 8.19883 1.02364 8.98744 1.35039C9.77606 1.67713 10.4926 2.15605 11.0962 2.75979C11.6998 3.36353 12.1786 4.08028 12.5052 4.86911C12.8319 5.65794 13 6.5034 13 7.35723C13 9.0816 12.3152 10.7353 11.0962 11.9547C9.87721 13.174 8.22391 13.859 6.5 13.859C2.9055 13.859 0 10.9332 0 7.35723C0 5.63285 0.684819 3.97911 1.90381 2.75979C3.12279 1.54047 4.77609 0.855469 6.5 0.855469ZM6.825 4.10635V7.51977L9.75 9.25574L9.2625 10.0555L5.85 8.0074V4.10635H6.825Z" fill="#B20000"/>
                                        </svg>                                    
                                        <div class="ms-2">
                                            {{$itemBerita->created_at}}
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </a>
                    </div> 
                @endforeach
            
            </div>

            <div class="mt-5 text-center">
                <a href="/berita" class="btn btn__primary">
                    Lihat Lainnya
                </a>
            </div>
        </div>
    </section>

    <section class="bg__primary visi_misi py-5 mb-5">
        <div class="container">
            <div class="row">
                
                <div class="col-md-8">

                    <div class="kategori__visi__misi d-flex">
                        <div class="btn btn-white px-4">
                            Sejarah
                        </div>

                        <div class="btn btn-outline-white px-4 ms-3">
                            Visi - Misi
                        </div>
                        <div class="btn btn-outline-white px-4 ms-3">
                            Tugas - Fungsi
                        </div>
                      
                    </div>

                    <div class="mt-4">
                        Dalam sebuah perjalanan menuju Bandara Soekarno-Hatta, terjadi obrolan antara intelektual muda Fadli Zon dan pengusaha Hashim Djojohadikusumo. Ketika itu, November 2007, keduanya membahas politik terkini, yang jauh dari nilai-nilai demokrasi sesungguhnya. Demokrasi sudah dibajak oleh orang-orang yang tidak bertanggung jawab dan memiliki kapital besar. Akibatnya, rakyat hanya jadi alat. Bahkan, siapapun yang tidak memiliki kekuasaan ekonomi dan politik akan dengan mudah jadi korban. Kebetulan, salah satu korban itu adalah Hashim sendiri. Dia diperkarakan ke pengadilan dengan tudingan mencuri benda-benda purbakala dari Museum radya Pustaka, Solo, Jawa tengah. “Padahal Pak Hashim ingin melestarikan benda-benda cagar budaya,“ kata Fadli mengenang peristiwa itu. Bila keadaan ini dibiarkan, negara hanya akan diperintah oleh para mafia. Fadli Zon lalu mengutip kata-kata politisi inggris abad kedelapan belas, Edmund Burke: “The only thing necessary for the triumph [of evil] is for good men to do nothing.
                    </div>
                </div>

                <div class="col-md-4">
                    <img src="{{asset("images/sekjend_sdi.png")}}" alt="SEKJEND SDI" class="img-fluid">
                </div>

            </div>
        </div>
    </section>
@endsection
