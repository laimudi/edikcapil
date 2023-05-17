<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function storeLogin(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $role = auth()->user()->role->name;
            if ($role == 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($role == 'kadis') {
                return redirect()->route('kadis.dashboard');
            } elseif ($role == 'pengguna') {
                return redirect()->route('pengguna.dashboard');
            } else {
                return redirect()->route('home');
            }
        }
        return back()->with('status', 'Username atau Password Salah');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
