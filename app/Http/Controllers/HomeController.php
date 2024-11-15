<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\AddPPDB;
use App\Models\Berita;
use App\Models\Deskripsi;
use App\Models\Dokumentasi;
use App\Models\Ekstrakurikuler;
use App\Models\Slider;
use App\Models\Sambutan;
use App\Models\Statistik;
use App\Models\Struktur;
use App\Models\Fasilitas;
use App\Models\Filter;
use App\Models\Kontak;
use App\Models\Listppdb;
use App\Models\PPDB;
use App\Models\Prestasi;
use App\Models\Profil;
use App\Models\Visi;
use App\Models\Misi;
use App\Models\Organisasi;
use App\Models\p5ra;
use App\Models\Sejarah;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $sambutans = Sambutan::first();
        $statistiks = Statistik::first();
        $visis = Visi::first();
        $profils = Profil::first();
        $misis = Misi::all();
        $beritas = Berita::orderBy('updated_at', 'desc')->take(3)->get();
        $links = Link::first();
        return view('home.index', compact('sliders', 'sambutans', 'statistiks', 'visis', 'profils', 'misis', 'beritas', 'links'));
    }

    public function contact()
    {
        $kontak = Kontak::first();
        $links = Link::first();
        return view('home.contact', compact('kontak', 'links'));
    }

    public function dokumentasi()
    {
        $dokumentasi = Dokumentasi::all();
        $filters = Filter::all();
        $links = Link::first();
        return view('home.dokumentasi', compact('dokumentasi', 'filters', 'links'));
    }

    public function berita()
    {
        $beritas = Berita::orderBy('updated_at', 'desc')->get();
        $links = Link::first();
        return view('home.berita', compact('beritas', 'links'));
    }

    public function organisasi()
    {
        $organisasis = Organisasi::all();
        $ekstrakurikulers = Ekstrakurikuler::all();
        $links = Link::first();
        return view('home.organisasi', compact('organisasis', 'ekstrakurikulers', 'links'));
    }

    public function sejarah()
    {
        $visis = Visi::first();
        $profils = Profil::first();
        $misis = Misi::all();
        $deskripsis = Deskripsi::first();
        $sejarahs = Sejarah::first();
        $links = Link::first();
        return view('home.sejarah', compact('visis', 'profils', 'misis', 'deskripsis', 'sejarahs', 'links'));
    }

    public function struktur()
    {
        $strukturs = Struktur::all();
        $links = Link::first();
        return view('home.struktur', compact('strukturs', 'links'));
    }

    public function fasilitas()
    {
        $fasilitass = Fasilitas::all();
        $links = Link::first();
        return view('home.fasilitas', compact('fasilitass', 'links'));
    }

    public function p5ra()
    {
        $p5ras = p5ra::all();
        $links = Link::first();
        return view('home.p5ra', compact('p5ras', 'links'));
    }

    public function ppdb()
    {
        $ppdbs = PPDB::all();
        $lists = Listppdb::all();
        $addppdbs = AddPPDB::all();
        $links = Link::first();
        return view('home.ppdb', compact('ppdbs', 'lists', 'addppdbs', 'links'));
    }

    public function prestasi()
    {
        $prestasis = Prestasi::all();
        $links = Link::first();
        return view('home.prestasi', compact('prestasis', 'links'));
    }

    public function detailberita($id)
    {
        $berita = Berita::find($id);
        $links = Link::first();
        return view('home.detailberita', compact('berita', 'links'));
    }
}
