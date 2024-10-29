<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akun;
use Illuminate\Support\Str;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $akun = Akun::all();
        return view('SuperAdmin.Akun.index', compact('akun'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('SuperAdmin.Akun.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'image' => 'required|image',
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('image')) {
            $destinationPath = 'image/users/';
            $imageName = 'user_' . date('YmdHis') . '_' . Str::random(8) . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$destinationPath$imageName";
        }
        $input['role'] = 'Admin';
        Akun::create($input);
    
        return redirect()->route('akun.index')->with('success', 'Akun Berhasil Ditambahkan');
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
        $akun = Akun::find($id);
        return view('SuperAdmin.Akun.edit', compact('akun'));
    }

    public function update(Request $request, $id)
    {
        $user = Akun::findOrFail($id);
    
        // Validasi input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable',
            'image' => 'nullable|image',
        ]);
    
        // Update data pengguna
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        
        // Update password jika diisi
        if ($request->filled('password')) {
            $user->password = $request->input('password'); // tidak di-hash sesuai permintaan
        }
    
        // Update gambar jika ada file baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($user->image && file_exists(public_path('uploads/' . $user->image))) {
                unlink(public_path('uploads/' . $user->image));
            }
    
            // Simpan gambar baru
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads'), $imageName);
            $user->image = $imageName;
        }
    
        $user->role = 'Admin'; // Set role sebagai 'Admin' secara default
    
        // Simpan perubahan
        $user->save();
    
        return redirect()->route('akun.index')->with('success', 'Data pengguna berhasil diperbarui.');
    }
    

    public function destroy($id)
    {
        $user = Akun::findOrFail($id);
    
        // Hapus gambar pengguna jika ada
        if ($user->image && file_exists(public_path('uploads/' . $user->image))) {
            unlink(public_path('uploads/' . $user->image));
        }
    
        // Hapus pengguna dari database
        $user->delete();
    
        return redirect()->route('akun.index')->with('success', 'Pengguna berhasil dihapus.');
    }
    
}
