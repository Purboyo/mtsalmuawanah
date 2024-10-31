<?php

namespace App\Http\Controllers;

use App\Models\Dokumentasi;
use App\Models\Filter;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DokumentasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokumentasis = Dokumentasi::with('filter')->get();
        $filters = Filter::all();
        return view('Admin.Dokumentasi.index', compact('dokumentasis', 'filters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $filters = Filter::all();
        return view('Admin.Dokumentasi.create', compact('filters'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
            'nama' => 'required',
            'filter_id' => 'required|integer',
            'image' => 'required|image',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/dokumentasi/';
            $imageName = 'Dokumentasi_' . date('YmdHis') . '_' . Str::random(8) . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }

        Dokumentasi::create($input);

        return redirect('/Dokumentasi')->with('success', 'Dokumentasi Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Dokumentasi = Dokumentasi::find($id);
        $filters = Filter::all();
        return view('Admin.Dokumentasi.edit', compact('Dokumentasi', 'filters'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate([
            'nama' => 'required',
            'filter_id' => 'required',
            'image' => 'image',
        ]);

        $Dokumentasi = Dokumentasi::find($id);
        $input = $request->all();
        if ($image = $request->file('image')) {
            if ($Dokumentasi->image != 'default.jpg') {
                unlink(public_path('image/dokumentasi/'. $Dokumentasi->image));
            }
            $destinationPath = 'image/dokumentasi/';
            $imageName = 'Dokumentasi_' . date('YmdHis') . '_' . Str::random(8) . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }
        $Dokumentasi->update($input);

        return redirect('/Dokumentasi')->with('success', 'Dokumentasi Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Dokumentasi = Dokumentasi::find($id);
        if ($Dokumentasi->image != 'default.jpg') {
            unlink(public_path('image/dokumentasi/'. $Dokumentasi->image));
        }
        $Dokumentasi->delete();
        return redirect('/Dokumentasi')->with('success', 'Dokumentasi Berhasil Dihapus');
    }
}
