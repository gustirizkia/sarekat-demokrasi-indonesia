<div class="me-2">Share : </div>
    <div class="">
        <a href="">
            <img src="{{asset("images/icon/ig.png")}}" alt="">                               
        </a>
        <a href="" class="ms-3">
            <img src="{{asset("images/icon/logos_facebook.svg")}}" alt="">                              
        </a>
        <a href="whatsapp://send/?text=*{{ $berita->judul_berita }}*%0A%0A{{ url('berita/'.$berita->slug) }}" class="ms-3">
            <img src="{{asset("images/icon/Group 35.png")}}" alt="">                                                               
        </a>
        <a href="whatsapp://send/?text=*{{ $berita->judul_berita }}*%0A%0A{{ url('berita/'.$berita->slug) }}" class="ms-3">
            <img src="{{asset("images/icon/tele.svg")}}" alt="">                                                                                                
        </a>
    </div>