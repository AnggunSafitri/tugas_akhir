<?php

namespace App\Http\Controllers\Anggota;

use App\Http\Controllers\Controller;
use App\Models\Giat;
use Illuminate\Http\Request;

class GiatController extends Controller
{
    function index()
    {
        $data['list_giat'] = Giat::where('id_anggota', auth()->user()->id)->get();
        return view('anggota.giat.index', $data);
    }

    function create()
    {
        return view('anggota.giat.create');
    }

    function store(Request $request)
    {
        $giat = new Giat;
        $giat->nama = request('nama');
        $giat->tanggal = request('tanggal');
        $giat->id_anggota = auth()->user()->id;
        $giat->deskripsi = request('deskripsi');
        $giat->handleUploadFoto();
        // return $giat;
        $giat->save();

        return redirect('anggota/giat-anggota')->with('success','Data Giat Telah di Tambahkan');
    }

    function show($giat)
    {
        $data['giat'] = Giat::find($giat);
        return view('anggota.giat.show', $data);
    }

    function edit($giat)
    {
        $data['giat'] = Giat::find($giat);
        return view('anggota.giat.edit', $data);
    }

    function update($giat)
    {
        $giat = Giat::find($giat);
        $giat->nama = request('nama');
        $giat->tanggal = request('tanggal');
        $giat->id_anggota = auth()->user()->id;
        $giat->deskripsi = request('deskripsi');
        if (request('foto')) $giat->handleUploadFoto();
        $giat->save();

        return redirect('anggota/giat-anggota')->with('warning','Data Giat Telah di Ubah');
    }

    function destroy($giat) {
        $giat = Giat::find($giat);
        $giat->delete();

        return back()->with('danger','Data Giat Telah di Hapus');
  
    }
}
