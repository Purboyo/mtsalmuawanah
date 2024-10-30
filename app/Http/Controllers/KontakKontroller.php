<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakKontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kontak = Kontak::all();
        return view('Admin.Kontak.index', compact('kontak'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $kontak = Kontak::findOrFail($id);
        return view('Admin.Kontak.edit', compact('kontak'));
    }

    // Fungsi update
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required|string',
            'alamat' => 'required|string',
        ]);

        $kontak = Kontak::findOrFail($id);
        $kontak->update([
            'maps' => $request->maps,
            'email' => $request->email,
            'phone' => $request->phone,
            'alamat' => $request->alamat,
        ]);

        return redirect('/Kontak')->with('success', 'Data kontak berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
