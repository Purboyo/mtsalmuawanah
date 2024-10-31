<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filter;

class FilterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
// FilterController.php

    public function store(Request $request)
    {
        $request->validate([
            'filter' => 'required|string|max:255',
        ]);

        Filter::create(['filter' => $request->filter]);

        return redirect()->back()->with('success', 'Filter berhasil ditambahkan!');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Filter::findOrFail($id)->delete();
    
        return redirect()->back()->with('success', 'Filter berhasil dihapus!');
    }
}
