<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function detail($slug){
        $berita = Berita::where("slug",$slug)->first();
        $beritaRekomendasi = Berita::where("kategori_berita_id", $berita->kategori_berita_id)
                ->where("id", '!=', $berita->id)
                ->limit(3)->get();
        return view("berita-detail",compact("berita", "beritaRekomendasi"));
    }
}
