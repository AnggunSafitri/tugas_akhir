<?php

namespace App\Http\Controllers\Anggota;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    function index()
    {
        // $data['list_berita'] = Berita::all();
        $data['list_berita'] = Berita::where('id_anggota', auth()->user()->id)->get();
        return view('anggota.berita.index', $data);
    }

    function create()
    {
        return view('anggota.berita.create');
    }

    function store(Request $request)
    {
        $berita = new Berita;
        $berita->judul = request('judul');
        $berita->tanggal = request('tanggal');
        $berita->id_anggota = auth()->user()->id;
        $berita->deskripsi = request('deskripsi');
        $berita->handleUploadFoto();
        // return $berita;
        $berita->save();

        return redirect('anggota/berita-anggota')->with('success','Data Berita Telah di Tambahkan');
    }

    function show($berita)
    {
        $data['berita'] = Berita::find($berita);
        return view('anggota.berita.show', $data);
    }

    function edit($berita)
    {
        $data['berita'] = Berita::find($berita);
        return view('anggota.berita.edit', $data);
    }

    function update($berita)
    {
        $berita = Berita::find($berita);
        $berita->judul = request('judul');
        $berita->tanggal = request('tanggal');
        $berita->id_anggota = auth()->user()->id;
        $berita->deskripsi = request('deskripsi');
        if (request('foto')) $berita->handleUploadFoto();
        // return $berita;
        $berita->save();

        return redirect('anggota/berita-anggota')->with('warning','Data Berita Telah di Ubah');
    }

    function destroy($berita) {
        $berita = Berita::find($berita);
        $berita->delete();

        return back()->with('danger','Data Berita Telah di Hapus');
  
    }
}
