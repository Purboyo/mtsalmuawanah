<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SuperAdminMiddleware
{
    public function handle($request, Closure $next)
    {
        // Cek apakah pengguna sudah login dan perannya adalah SuperAdmin
        if (Auth::check() && Auth::user()->name === 'SuperAdmin') {
            return $next($request);
        }

        // Redirect jika pengguna bukan SuperAdmin
        return redirect('/dashboard')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
    }
}
