@extends('layouts.app')

@section('title', 'Tambah Berita')

@section('content')
<div class="container">
    <a href="{{ route('Berita.index') }}" class="btn btn-success mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('Berita.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Judul Berita -->
                <div class="form-group">
                    <label for="judul">Judul Berita</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Berita">
                    @error('judul')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Tanggal -->
                <div class="form-group">
                    <label for="tanggal">Tanggal Terbit</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal">
                    @error('tanggal')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Deskripsi Singkat -->
                <div class="form-group">
                    <label for="deskripsisingkat">Deskripsi Singkat</label>
                    <textarea class="form-control" id="deskripsisingkat" name="deskripsisingkat" rows="2" placeholder="Masukkan Deskripsi Singkat"></textarea>
                    @error('deskripsisingkat')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Deskripsi Lengkap -->
                <div class="form-group">
                    <label for="deskripsi">Isi Berita</label>
                    <textarea class="form-control" id="markdown" name="deskripsi" rows="5" placeholder="Masukan Isi Berita"></textarea>
                    @error('deskripsi')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
                

                <!-- Gambar -->
                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" class="form-control" id="image" name="image">
                    @error('image')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <small class="form-text text-muted">Masukkan file dengan format jpg, jpeg, atau png!</small>
                </div>

                <!-- Link -->
                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" class="form-control" id="link" name="link" placeholder="Masukkan Link Berita">
                    @error('link')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <small class="form-text text-muted">Masukkan link berita jika ada!</small>
                </div>

                <!-- Submit -->
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">Tambah Berita</button>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection
<!-- Tambahkan di dalam section 'head' -->
@section('head')
<script src="{{ mix('js/app.js') }}"></script>
@endsection





