<?php
namespace App\Models;

use App\Models\ModelBase;
use illuminate\Support\Str;


class Profil extends ModelBase     
{
    protected $table = 'profil';

    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "profil";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
        }
    }
}