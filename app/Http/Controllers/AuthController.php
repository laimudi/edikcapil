<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        return back()->with('status', 'Email atau Password Salah');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function storeRegister(Request $request)
    {
        $users = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
            'role_id' => 3,
        ]);

        Auth::login($users);

        return redirect()->route('pengguna.dashboard');
        // dd($request->all);
        // $validator
        // $email = User::where('email', $request->email)->first();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
