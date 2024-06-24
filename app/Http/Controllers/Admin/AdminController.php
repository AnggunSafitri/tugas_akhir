<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard() {
        
        return view('admin.dashboard');
    }

    function index()
    {
        $data['list_admin'] = Admin::all();
        return view('admin.admin.index', $data); 
        // semua controller di view nya di tambah admin.
    }

    function create()
    {
        return view('admin.admin.create');
    }

    function store(Request $request)
    {
        $admin = new Admin;
        $admin->nama = request('nama');
        $admin->username = request('username');
        $admin->email = request('email');
        $admin->password = request('password');
        $admin->save();

        return redirect('admin/admin')->with('success','Data Admin Telah di Tambahkan');
    }

    function show($admin)
    {
        $data['admin'] = Admin::find($admin);
        return view('admin.admin.show', $data);
    }

    function edit($admin)
    {
        $data['admin'] = Admin::find($admin);
        return view('admin.admin.edit', $data);
    }

    function update($admin)
    {
        $admin = Admin::find($admin);
        $admin->nama = request('nama');
        $admin->username = request('username');
        $admin->email = request('email');
        $admin->password = request('password');
        if (request('foto')) $admin->handleUploadFoto();
        $admin->save();

        return redirect('admin/admin')->with('warning','Data Admin Telah di Ubah');
    }

    function destroy($admin) {
        $admin = Admin::find($admin);
        $admin->delete();

        return redirect('admin/admin')->with('danger','Data Admin Telah di Hapus');

        
    }
}
