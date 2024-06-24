<?php
namespace App\Models;

use App\Models\Anggota;
use App\Models\ModelBase;
use Carbon\Carbon;
use illuminate\Support\Str;


class Berita extends ModelBase     
{
    protected $table = 'berita';
    
    public function Anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota');
    }

    function handleUploadFoto()
    {
        $this->handleDelete();
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "berita";
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

    public function getTanggalStringAttribute()
    {
        return Carbon::parse($this->attributes['tanggal'])->translatedFormat('l, d F Y');
    }
}