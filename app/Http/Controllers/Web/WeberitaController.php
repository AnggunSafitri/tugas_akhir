<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WeberitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_berita'] = Berita::latest()->take(6)->get();
        $data['anggota'] = $anggota = auth()->guard('anggota')->user();
        return view('web.weberita.index',$data);
    }
    
    public function detail($berita)
    {
        $data['berita'] = Berita::find($berita);
        $data['list_berita'] = Berita::orderBy('id', 'DESC')->take(6)->get();
        // return $data;
        $data['anggota'] = $anggota = auth()->guard('anggota')->user();
        return view('web.weberita.detail',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function buatberita(Request $request)
    {
        $berita = new Berita;
        $berita->id_anggota = auth()->guard('anggota')->user()->id;
        $berita->judul = request('judul');
        $berita->deskripsi = request('deskripsi');
        $berita->link_youtube = request('link_youtube');
        $berita->status = 2;
        $berita->handleUploadFoto();
        $berita->tanggal = Carbon::now()->format('Y-m-d');
        $berita->save();

        return back()->with('status', [
            'type' => 'success',
            'message' => 'Data berhasil disimpan!',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
