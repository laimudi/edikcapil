<?php

namespace App\Http\Controllers\pengguna;

use App\Http\Controllers\Controller;
use App\Models\KartuKK;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KartuKKController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kartukels = KartuKK::all();
        $kecamatans = Kecamatan::all();
        return view('pengguna.kk.kartukk', compact('kartukels', 'kecamatans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengguna.kk.tambah_kk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kartukels = KartuKK::create([
            'nomor_kk',
            'nm_kl',
            'alamat',
            'rt',
            'kode_pos',
            'kelurahan',
            'kecamatan_id',
            'kabupaten',
            'provinsi',
            'nama',
            'nik',
            'gender',
            'tmp_lahir',
            'tgl_lahir',
            'agaman',
            'pendidikan',
            'pekerjaan',
            'status',
            'status_kk',
            'warga_negara',
            'nomor_ps',
            'nomor_kitap',
            'nm_ayah',
            'nm_ibu',
            'berkas'
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
