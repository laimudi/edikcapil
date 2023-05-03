<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeri = Galeri::all();
        return view('admin.galeri.galeri', compact('galeri'));
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
        $gambar->store('galeri', 'public');

        Galeri::create([
            'judul' => $request->judul,
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
        $galeri = Galeri::findOrFail($id);

        if ($request->file('gambar') == null) {
            $galeri->update([
                'judul' => $request->judul
            ]);
        } else {
            // hapus gambar
            $file = public_path('storage/galeri/') . $galeri->gambar;
            if (file_exists($file)) {
                @unlink($file);
            }
            Storage::delete($file);

            // gambar baru
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/galeri/', $gambar->hashName());

            $galeri->update([
                'judul' => $request->judul,
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
        Galeri::destroy($id);
        return redirect()->route('galeri.index');
    }
}
