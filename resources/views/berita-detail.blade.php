@extends('layouts.front')

@section('title')
    {{$berita->judul_berita}}
@endsection

@push('addStyle')
    <style>
        body{
            background-color: #FFF6F6;
        }
        .image__berita{
            border-radius: 32px;
        }

        .share{
            background-color: white;
            border-radius: 100px;
            padding: 12px;
            bottom: -22px;
            left: 50%;
            transform: translate(-50%, 0);
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

        @media (max-width: 767.98px){
            .share{
                left: unset;
                transform: unset;
            }
        }
    </style>
@endpush

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="h1 my-3 text-center">{{ $berita->judul_berita }}</h1>
            <div class="position-relative">
                <img src="{{asset("storage/".$berita->image)}}" alt="Berita sarekat demokrasi indonesia | {{$berita->judul_berita}}" class="img-fluid image__berita">
                <div class="share d-md-flex align-items-center position-absolute d-none">
                    @include('includes.share')
                </div>
                <div class="mt-4 mt-md-0 d-flex d-md-none">
                    @include('includes.share')
                </div>
            </div>
            <div class="mt-md-5 mt-3">
                {!! $berita->isi_berita !!}
            </div>
        </div>
    </div>

<div class="mb-4 mt-5">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="h2">
            BERITA REKOMENDASI
        </h1>

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

@if (count($beritaRekomendasi))
    <div class="mt-5">
        <div class="row justify-content-center">
            @foreach ($beritaRekomendasi as $itemBerita)
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
    </div>
@endif

</div>
@endsection