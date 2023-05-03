<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::all();
        return view('admin.berita.berita', compact('berita'));
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
        $validasi = Validator::make($request->all(), [
            'gambar' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        if ($validasi->fails()) {
            return redirect()->back();
        }

        $gambar = $request->file('gambar');
        $gambar->store('berita', 'public');

        Berita::create([
            'judul' => $request->judul,
            'isi_berita' => $request->isi_berita,
            'gambar' => $gambar->hashName()
        ]);

        return redirect()->back();
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
    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        // jika gambar tidak diedit
        if ($request->file('gambar') == null) {
            $berita->update([
                'judul' => $request->judul,
                'isi_berita' => $request->isi_berita
            ]);
        } else {
            // hapus gambar lama
            $file = public_path('storage/berita/') . $berita->gambar;
            if (file_exists($file)) {
                @unlink($file);
            }
            Storage::delete($file);

            // gambar baru
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/berita', $gambar->hashName());

            $berita->update([
                'judul' => $request->judul,
                'isi_berita' => $request->isi_berita,
                'gambar' => $gambar->hashName()
            ]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Berita::destroy($id);
        return redirect()->route('berita.index');
    }
}
