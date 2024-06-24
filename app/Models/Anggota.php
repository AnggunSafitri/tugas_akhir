<?php
namespace App\Models;

use App\Models\ModelAuthenticate;
use illuminate\Support\Str;
use App\Models\Berita;
use App\Models\Giat;


class Anggota extends ModelAuthenticate  
{
    protected $table = 'anggota';

    public function Berita()
    {
        return $this->belongsTo(Berita::class, 'id');
    }

    public function Giat()
    {
        return $this->belongsTo(Giat::class, 'id');
    }


    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "anggota";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
        }
    }


   

}