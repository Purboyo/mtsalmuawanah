<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Struktur;
use App\Models\Dokumentasi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() 
    {
        $berita = Berita::count();
        $struktur = Struktur::count();
        $dokumentasi = Dokumentasi::count();
        return view('dashboard', compact('berita', 'struktur' , 'dokumentasi'));
    }
}
