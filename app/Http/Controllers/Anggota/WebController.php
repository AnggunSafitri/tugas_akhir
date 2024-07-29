<?php

namespace App\Http\Controllers\Anggota;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Giat;
use Illuminate\Http\Request;


class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data['list_berita'] = Berita::latest()->take(6)->get();
        $data['list_giat'] = Giat::latest()->take(4)->get();
        $data['anggota'] = $anggota = auth()->guard('anggota')->user();
        // return $data;
        return view('anggota.webenest.index',$data);
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
    public function store(Request $request)
    {
        //
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
