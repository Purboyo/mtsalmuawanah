@extends('SuperAdmin.app')

@section('title', 'Tambah Akun')

@section('content')
<div class="container mt-5">
    <h2>Tambah Pengguna</h2>

    <form action="{{ route('akun.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Foto --}}
        <div class="form-group mb-3">
            <label for="image">Foto</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
            @error('image')
            <small style="color: red">{{ $message }}</small>
            @enderror
        </div>

        {{-- Nama --}}
        <div class="form-group mb-3">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama" value="" >
            @error('name')
            <small style="color: red">{{ $message }}</small>
            @enderror
        </div>

        {{-- Email --}}
        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" value="" >
            @error('email')
            <small style="color: red">{{ $message }}</small>
            @enderror
        </div>

        {{-- Password --}}
        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" >
            @error('password')
            <small style="color: red">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('akun.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
