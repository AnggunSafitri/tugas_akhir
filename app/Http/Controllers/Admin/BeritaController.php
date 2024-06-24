<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    function index()
    {
        $data['list_berita'] = Berita::all();
        return view('admin.berita.index', $data);
    }

    function create()
    {
        $data['list_anggota'] = Anggota::all();
        return view('admin.berita.create', $data);
    }

    function store(Request $request)
    {
        $berita = new Berita;
        $berita->judul = request('judul');
        $berita->tanggal = request('tanggal');
        $berita->id_anggota = request('id_anggota');
        $berita->deskripsi = request('deskripsi');
        $berita->status = 2;
        $berita->handleUploadFoto();
        // return $berita;
        $berita->save();

        return redirect('admin/berita')->with('success','Data Berita Telah di Tambahkan');
    }

    function show($berita)
    {
        $data['berita'] = Berita::find($berita);
        return view('admin.berita.show', $data);
    }

    function edit($berita)
    {
        $data['list_anggota'] = Anggota::all();
        $data['berita'] = Berita::find($berita);
        return view('admin.berita.edit', $data);
    }

    function update($berita)
    {
        $berita = Berita::find($berita);
        $berita->judul = request('judul');
        $berita->tanggal = request('tanggal');
        $berita->id_anggota = request('id_anggota');
        $berita->deskripsi = request('deskripsi');
        if (request('foto')) $berita->handleUploadFoto();
        $berita->save();

        return redirect('admin/berita')->with('warning','Data Berita Telah di Ubah');
    }

    function destroy($berita) {
        $berita = Berita::find($berita);
        $berita->handleDelete();
        $berita->delete();

        return redirect('admin/berita')->with('danger','Data Berita Telah di Hapus');
  
    }

    public function post($berita) {
        
        $berita = Berita::find($berita);
        $berita->status = 2;
        $berita->save();

        return back()->with('warning', 'Berita Berhasil di Publis');
    }


    public function arsip($berita) {
        
        $berita = Berita::find($berita);
        $berita->status = 3;
        $berita->save();

        return back()->with('warning', 'Berita Berhasil di Arsipkan');
    }
}
