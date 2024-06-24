<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    function index()
    {
        $data['list_profil'] = Profil::all();
        return view('admin.profil.index', $data);
    }

    function create()
    {
        return view('admin.profil.create');
    }

    function store(Request $request)
    {
        $profil = new Profil;
        $profil->nama = request('nama');
        $profil->deskripsi = request('deskripsi');
        $profil->sejarah = request('sejarah');
        $profil->experience = request('experience');
        $profil->project = request('project');
        $profil->handleUploadFoto();
        $profil->save();

        return redirect('admin/profil')->with('success','Data Profil Telah di Tambahkan');
    }

    function show($profil)
    {
        $data['profil'] = Profil::find($profil);
        // return $data;
        return view('admin.profil.show', $data);
    }

    function edit($profil)
    {
        $data['profil'] = Profil::find($profil);
        return view('admin.profil.edit', $data);
    }

    function update($profil)
    {
        $profil = Profil::find($profil);
        $profil->nama = request('nama');
        $profil->deskripsi = request('deskripsi');
        $profil->sejarah = request('sejarah');
        $profil->experience = request('experience');
        $profil->project = request('project');
        if (request('foto')) $profil->handleUploadFoto();
        $profil->save();

        return redirect('admin/profil')->with('warning','Data Profil Telah di Ubah');
    }

    function destroy($profil) 
    {
        $profil = Profil::find($profil);
        $profil->delete();
        return redirect('admin/profil')->with('danger','Data Profil Telah di Hapus');

        
    }

    // function store(Profil $profil)
    // {
    //     $profil-> = request('project');
    // }
}
