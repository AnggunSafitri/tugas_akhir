<?php
namespace App\Models;

use App\Models\ModelBase;
use illuminate\Support\Str;
use App\Models\Anggota;


class Giat extends ModelBase     
{
    protected $table = 'giat';

    public function Anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota');
    }

    function handleUploadFoto()
    {
        $this->handleDelete();
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "giat";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
        }
    }

    function handleDelete()
    {
        $foto = $this->foto;
        if ($foto) {
            $path = public_path($foto);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}