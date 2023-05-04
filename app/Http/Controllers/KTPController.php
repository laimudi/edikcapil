<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KTPController extends Controller
{
    public function ktp()
    {
        return view('pengguna.ktp');
    }
}
