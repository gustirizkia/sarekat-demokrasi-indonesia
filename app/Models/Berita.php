<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    public function kategori(){
        return $this->belongsTo(KategoriBerita::class, "kategori_berita_id", "id");
    }
}
