<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {   
        if (auth()->guard('admin')->attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('admin')->with('success', 'Login Berhasil');
        }

		if (auth()->guard('anggota')->attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('anggota')->with('success', 'Login Berhasil');
        }

        return back()->with('danger','Login Gagal');
    }

    function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        Auth::guard('anggota')->logout();

        $request->session()->invalidate();
        return redirect('/');
    }
}
