<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/daftar-pemesan');
        }
        return redirect('/login')->with('error', 'Email / Password salah !');
    }

    public function logout(Request $request)
    {
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();
            return redirect('/');
        
    }
}
