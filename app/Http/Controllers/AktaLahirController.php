<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AktaLahirController extends Controller
{
    public function aktalahir()
    {
        return view('akta_lahir');
    }
}
