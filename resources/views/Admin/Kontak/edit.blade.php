@extends('layouts.app')

@section('title', 'Edit Kontak')

@section('content')
<div class="container mt-5">
    <h2>Edit Data Kontak</h2>

    <form action="{{ route('Kontak.update', $kontak->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Edit Email --}}
        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" value="{{ old('email', $kontak->email) }}" >
            @error('email')
            <small style="color: red">{{ $message }}</small>
            @enderror
        </div>

        {{-- Edit Telephone --}}
        <div class="form-group mb-3">
            <label for="phone">Telephone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Masukkan Nomor Telepon" value="{{ old('phone', $kontak->phone) }}" >
            @error('phone')
            <small style="color: red">{{ $message }}</small>
            @enderror
        </div>

        {{-- Edit Alamat --}}
        <div class="form-group mb-3">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan Alamat" >{{ old('alamat', $kontak->alamat) }}</textarea>
            @error('alamat')
            <small style="color: red">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ route('Kontak.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
