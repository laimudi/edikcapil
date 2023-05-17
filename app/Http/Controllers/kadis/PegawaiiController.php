<?php

namespace App\Http\Controllers\kadis;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('kadis.pegawaii', compact('pegawai'));
    }
}
