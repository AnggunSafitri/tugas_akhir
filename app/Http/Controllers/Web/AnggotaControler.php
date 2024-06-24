<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaControler extends Controller
{
    public function index($anggota) {

        $data['anggota'] = Anggota::find($anggota);
        $data['anggota'] = $anggota = auth()->guard('anggota')->user();
        return view('web.anggota.index', $data);
    }

    public function update($anggota) {
        $anggota = Anggota::find($anggota);
        $anggota->nama = request('nama');
        $anggota->username = request('username');
        $anggota->email = request('email');
        if(request('password')) $anggota->password = request('password');
        $anggota->handleUploadFoto();
        $anggota->save();

        return back();
    } 
}
