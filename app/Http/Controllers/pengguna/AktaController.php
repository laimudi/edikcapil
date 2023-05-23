<?php

namespace App\Http\Controllers\pengguna;

use App\Models\Akta;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AktaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $akta = Akta::all();
        return view('pengguna.aktalahir.akta', compact('akta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengguna.aktalahir.tambah_akta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'berkas' => 'required|mimes:pdf'
        ]);

        if ($validasi->fails()) {
            return redirect()->back();
        }

        $document = $request->berkas;
        $berkas = time() . '.' . $document->getClientOriginalExtension();
        $request->berkas->move(public_path('storage/akta-pdf/'), $berkas);

        $akta = Akta::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'thn_lahir' => $request->thn_lahir,
            'gender' => $request->gender,
            'anak' => $request->anak,
            'nm_ayah' => $request->nm_ayah,
            'nm_ibu' => $request->nm_ibu,
            'berkas' => $request->berkas
        ]);

        return view('pengguna.aktalahir.akta');
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
        Akta::destroy($id);
        return redirect()->route('akta.index');
    }

    public function cetakAkta($id)
    {
        $akta = Akta::findOrFail($id);
        $pdf = Pdf::loadView('pengguna.aktalahir.cetak_akta_lahir', compact('akta'));
        return $pdf->download('akta-kelahiran.pdf');
    }
}
