<?php

namespace App\Http\Controllers;

use App\Models\AddPPDB;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Sambutan;
use App\Models\Statistik;
use App\Models\Struktur;
use App\Models\Fasilitas;
use App\Models\Listppdb;
use App\Models\PPDB;
use App\Models\Prestasi;


class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $sambutans = Sambutan::first();
        $statistiks = Statistik::first();
        return view('home.index', compact('sliders','sambutans','statistiks'));
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function dokumentasi()
    {
        return view('home.dokumentasi');
    }

    public function berita()
    {
        return view('home.berita');
    }

    public function organisasi()
    {
        return view('home.organisasi');
    }

    public function sejarah()
    {
        return view('home.sejarah');
    }

    public function struktur()
    {
        $strukturs = Struktur::all();
        return view('home.struktur', compact('strukturs'));
    }
    
    public function fasilitas()
    {
        $fasilitass = Fasilitas::all();
        return view('home.fasilitas', compact('fasilitass')); 
    }

    public function p5ra()
    {
        return view('home.p5ra'); 
    }

    public function ppdb()
    {
        $ppdbs = PPDB::all();
        $lists = Listppdb::all();
        $addppdbs = AddPPDB::all();
        return view('home.ppdb', compact('ppdbs', 'lists', 'addppdbs')); 
    }

    public function prestasi()
    {
        $prestasis = Prestasi::all();
        return view('home.prestasi', compact('prestasis')); 
    }
}
