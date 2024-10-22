<?php

namespace App\Http\Controllers;

use App\Models\Visi;
use Illuminate\Http\Request;


class VisiMisiController extends Controller
{

    public function index()
    {
        $visis = Visi::all();
        return view('Admin.Profil.visimisi.index', compact('visis'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
    }


    public function show()
    {
        
    }

    public function edit(Visi $visi)
    {
        return view('Admin.Profil.visimisi.edit', compact('visi'));

    }

    public function update(Request $request, Visi $visi)
    {
        $request->validate([
            'visi' => 'required|string|max:255',
        ]);

        $visi->update([
            'visi' => $request->input('visi'),
        ]);

        return redirect()->route('visimisi.index')->with('success', 'Visi berhasil diperbarui!');
    }


    public function destroy(string $id)
    {
        //
    }
}
