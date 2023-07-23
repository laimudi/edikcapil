<?php

namespace App\Http\Controllers\pengguna;

use App\Models\User;
use App\Models\KartuKK;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class KartuKKController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('id', auth()->user()->id)->first();
        $kartukels = KartuKK::where('user_id', $user->id)->get();
        return view('pengguna.kk.kartukk', compact('user', 'kartukels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kecamatans = Kecamatan::select('id', 'kecamatan')->get();
        return view('pengguna.kk.tambah_kk', compact('kecamatans'));
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
        $request->berkas->move(public_path('storage/kk-pdf'), $berkas);

        $kartukels = KartuKK::create([
            'user_id' => auth()->id(),
            'nomor_kk' => $request->nomor_kk,
            'nm_kl' => $request->nm_kl,
            'alamat' => $request->alamat,
            'rt' => $request->rt,
            'kode_pos' => $request->kode_pos,
            'kelurahan' => $request->kelurahan,
            'kecamatan_id' => $request->kecamatan_id,
            'kabupaten' => $request->kabupaten,
            'provinsi' => $request->provinsi,
            'nama' => $request->nama,
            'nik' => $request->nik,
            'gender' => $request->gender,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'agaman' => $request->agama,
            'pendidikan' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'status' => $request->status,
            'status_kk' => $request->status_kk,
            'warga_negara' => $request->warga_negara,
            'nomor_ps' => $request->nomor_ps,
            'nomor_kitap' => $request->nomor_kitap,
            'nm_ayah' => $request->nm_ayah,
            'nm_ibu' => $request->nm_ibu,
            'berkas' => $request->berkas
        ]);
        return redirect()->root()->back();
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

    public function cetakKK()
    {
        $kartukel = KartuKK::all();
        $pdf = Pdf::loadView('pengguna.kk.cetak_kk', compact('kartukel'))
            ->setPaper('a4', 'landscape');
        return $pdf->stream('kartu-keluarga.pdf');
    }
}
