<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KIAController extends Controller
{
    public function kia()
    {
        return view('pengguna.kia');
    }
}
