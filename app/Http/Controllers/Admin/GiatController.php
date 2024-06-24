<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\Giat;
use Illuminate\Http\Request;

class GiatController extends Controller
{
    function index()
    {
        $data['list_giat'] = Giat::all();
        return view('admin.giat.index', $data);
    }

    function create()
    {
        $data['list_anggota'] = Anggota::all();
        return view('admin.giat.create', $data);
    }

    function store(Request $request)
    {
        $giat = new Giat;
        $giat->nama = request('nama');
        $giat->tanggal = request('tanggal');
        $giat->id_anggota = request('id_anggota');
        $giat->deskripsi = request('deskripsi');
        $giat->handleUploadFoto();
        // return $giat;
        $giat->save();

        return redirect('admin/giat')->with('success','Data Giat Telah di Tambahkan');
    }

    function show($giat)
    {
        $data['giat'] = Giat::find($giat);
        return view('admin.giat.show', $data);
    }

    function edit($giat)
    {
        $data['giat'] = Giat::find($giat);
        $data['list_anggota'] = Anggota::all();
        return view('admin.giat.edit', $data);
    }

    function update($giat)
    {
        $giat = Giat::find($giat);
        $giat->nama = request('nama');
        $giat->tanggal = request('tanggal');
        $giat->id_anggota = request('id_anggota');
        $giat->deskripsi = request('deskripsi');
        if (request('foto')) $giat->handleUploadFoto();
        $giat->save();

        return redirect('admin/giat')->with('warning','Data Giat Telah di Ubah');
    }

    function destroy($giat) {
        $giat = Giat::find($giat);
        $giat->delete();

        return redirect('admin/giat')->with('danger','Data Giat Telah di Hapus');

        
    }
}
