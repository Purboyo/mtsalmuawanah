<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Link = Link::all();
        return view('Admin.Link.index', compact('Link'));
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
        $item = Link::findOrFail($id);
        return view('Admin.Link.edit', compact('item'));
    }
    
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'youtube' => 'nullable|url',
            'whatsapp' => 'nullable|string',
        ]);
    
        // Ambil data Link
        $Link = Link::findOrFail($id);
    
        // Perbarui data Link
        $Link->facebook = $request->facebook;
        $Link->instagram = $request->instagram;
        $Link->youtube = $request->youtube;
        $Link->whatsapp = $request->whatsapp;
    
        // Simpan perubahan
        $Link->save();
    
        // Kirimkan pesan sukses
        return redirect()->route('Link.index')->with('success', 'Data Link berhasil diperbarui');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
