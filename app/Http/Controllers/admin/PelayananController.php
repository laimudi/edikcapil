<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pelayanan;
use Illuminate\Http\Request;

class PelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelayanan = Pelayanan::all();
        return view('admin.pelayanan.pelayanan', compact('pelayanan'));
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
        $pelayanan = Pelayanan::create([
            'pelayanan' => $request->pelayanan,
            'persyaratan' => $request->persyaratan
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
        $pelayanan = Pelayanan::findOrFail($id);

        $pelayanan->Update([
            'pelayanan' => $request->pelayanan,
            'persyaratan' => $request->persyaratan
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Pelayanan::destroy($id);
        return redirect()->route('pelayanan.index');
    }
}
