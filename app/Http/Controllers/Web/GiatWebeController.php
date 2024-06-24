<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Giat;
use Illuminate\Http\Request;

class GiatWebeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_giat'] = Giat::all();
        $data['anggota'] = $anggota = auth()->guard('anggota')->user();
        return view('web.giat_webe.index',$data);
    }

    public function detail($giat)
    {
        $data['giat'] = Giat::find($giat);
        $data['list_giat'] = Giat::latest()->take(6)->get();
        $data['anggota'] = $anggota = auth()->guard('anggota')->user();
        // return $data;
        return view('web.giat_webe.detail',$data);
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
