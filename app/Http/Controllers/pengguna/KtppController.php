<?php

namespace App\Http\Controllers\pengguna;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Kecamatan;
use App\Models\Ktp;

class KtppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ktp = Ktp::all();
        return view('pengguna.ktp.kartup', compact('ktp'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kecamatan = Kecamatan::select('id', 'kecamatan')->get();
        return view('pengguna.ktp.tambah_ktp', compact('kecamatan'));
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
