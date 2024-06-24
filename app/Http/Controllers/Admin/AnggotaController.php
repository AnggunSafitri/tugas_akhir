<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    function index()
    {
        $data['list_anggota'] = Anggota::all();
        return view('admin.anggota.index', $data);
    }

    function create()
    {
        return view('admin.anggota.create');
    }

    function store(Request $request)
    {
        $anggota = new Anggota;
        $anggota->nama = request('nama');
        $anggota->username = request('username');
        $anggota->email = request('email');
        $anggota->password = request('password');
        $anggota->handleUploadFoto();
        $anggota->save();

        return redirect('admin/anggota')->with('success','Data Anggota Telah di Tambahkan');
    }

    function show($anggota)
    {
        $data['anggota'] = Anggota::find($anggota);
        return view('admin.anggota.show', $data);
    }

    function edit($anggota)
    {
        $data['anggota'] = Anggota::find($anggota);
        return view('admin.anggota.edit', $data);
    }

    function update($anggota)
    {
        $anggota = Anggota::find($anggota);
        $anggota->nama = request('nama');
        $anggota->username = request('username');
        $anggota->email = request('email');
        $anggota->password = request('password');
        if (request('foto')) $anggota->handleUploadFoto();
        $anggota->save();

        return redirect('admin/anggota')->with('warning','Data Anggota Telah di Ubah');
    }

    function destroy($anggota) {
        $anggota = Anggota::find($anggota);
        $anggota->delete();

        return redirect('admin/anggota')->with('danger','Data Anggota Telah di Hapus');

        
    }
}
