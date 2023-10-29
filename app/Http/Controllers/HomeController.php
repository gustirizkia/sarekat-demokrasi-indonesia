<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $berita = Berita::orderBy("id", "desc")->limit(6)->get();

        return view("home", [
            'berita' => $berita
        ]);
    }
}
