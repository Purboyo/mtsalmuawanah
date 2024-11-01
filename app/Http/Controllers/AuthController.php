<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Akun;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticated(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        // Ambil data akun berdasarkan email
        $akun = Akun::where('email', $request->email)->first();
    
        // Cek apakah akun ditemukan dan password cocok
        if ($akun && $akun->password === $request->password) {
            Auth::login($akun); // Login ke akun
            $request->session()->regenerate();
    
            // Cek peran pengguna dan arahkan sesuai
            if ($akun->name === 'SuperAdmin') {
                return redirect('/SuperAdmin');
            } else {
                // Redirect ke dashboard jika bukan SuperAdmin
                return redirect('/dashboard');
            }
        }
    
        return back()->withErrors([
            'LoginError' => "Email atau password salah"
        ]);
    }
    


    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
