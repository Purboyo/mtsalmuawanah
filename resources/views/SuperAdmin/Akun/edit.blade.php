@extends('SuperAdmin.app')

@section('title', 'Edit Akun')

@section('content')
<div class="container mt-5">
    <h2>Edit Akun</h2>

    <form action="{{ route('akun.update', $akun->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        {{-- Edit Nama --}}
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama" value="{{ old('name', $akun->name) }}">
            @error('name')
                <small style="color: red">{{ $message }}</small>
            @enderror
        </div>

        {{-- Edit Email --}}
        <div class="form-group mt-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" value="{{ old('email', $akun->email) }}">
            @error('email')
                <small style="color: red">{{ $message }}</small>
            @enderror
        </div>

        {{-- Edit Password --}}
        <div class="form-group mt-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password (biarkan kosong jika tidak ingin mengubah)">
            <p>*biarkan kosong jika tidak ingin mengubah</p>
            @error('password')
                <small style="color: red">{{ $message }}</small>
            @enderror
        </div>

        {{-- Edit Foto --}}
        <div class="form-group mt-3">
            <label for="image">Foto</label>
            <input type="file" class="form-control" id="image" name="image">
            @if($akun->image)
                <img src="{{ asset('uploads/' . $akun->image) }}" alt="Foto" width="100" class="mt-2">
            @endif
            @error('image')
                <small style="color: red">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            <a href="{{ route('akun.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>
@endsection
