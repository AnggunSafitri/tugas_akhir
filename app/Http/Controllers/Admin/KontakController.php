<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    function index()
    {
        $data['list_kontak'] = Kontak::all();
        return view('admin.kontak.index', $data);
    }

    function create()
    {
        return view('admin.kontak.create');
    }

    function store(Request $request)
    {
        $kontak = new Kontak;
        $kontak->nama = request('nama');
        $kontak->email = request('email');
        $kontak->nohp = request('nohp');
        $kontak->link_ig = request('link_ig');
        $kontak->alamat = request('alamat');
        $kontak->jabatan = request('jabatan');
        $kontak->save();

        return redirect('admin/kontak')->with('success','Data Kontak Telah di Tambahkan');
    }

    function show($kontak)
    {
        $data['kontak'] = Kontak::find($kontak);
        return view('admin.kontak.show', $data);
    }

    function edit($kontak)
    {
        $data['kontak'] = Kontak::find($kontak);
        return view('admin.kontak.edit', $data);
    }

    function update($kontak)
    {
        $kontak = Kontak::find($kontak);
        $kontak->nama = request('nama');
        $kontak->email = request('email');
        $kontak->nohp = request('nohp');
        $kontak->link_ig = request('link_ig');
        $kontak->alamat = request('alamat');
        $kontak->jabatan = request('jabatan');
        $kontak->save();

        return redirect('admin/kontak')->with('warning','Data Kontak Telah di Ubah');
    }

    function destroy($kontak) 
    {
        $kontak = Kontak::find($kontak);
        $kontak->delete();

        return redirect('admin/kontak')->with('danger','Data Kontak Telah di Hapus');

        
    }
}
