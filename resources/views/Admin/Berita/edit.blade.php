@extends('layouts.app')

@section('title', 'Edit Berita')

@section('content')

<div class="container">
    <a href="{{ route('AdminBerita.index') }}" class="btn btn-success mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('AdminBerita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Judul Berita --}}
                <div class="form-group">
                    <label for="judul">Judul Berita</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ $berita->judul }}" >
                    @error('judul')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
                

                {{-- Tanggal --}}
                <div class="form-group">
                    <label for="tanggal">Tanggal Terbit</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $berita->tanggal }}" >
                    
                    @error('tanggal')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>

                {{-- Deskripsi Singkat --}}
                <div class="form-group">
                    <label for="deskripsisingkat">Deskripsi Singkat</label>
                    <textarea class="form-control" id="deskripsisingkat" name="deskripsisingkat" rows="2" >{{ $berita->deskripsisingkat }}</textarea>
                    
                    @error('deskripsisingkat')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>

                {{-- Deskripsi Lengkap --}}
                <div class="form-group">
                    <label for="deskripsi">Isi Berita</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" >{{ $berita->deskripsi }}</textarea>
                    
                    @error('deskripsi')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>

                {{-- Gambar --}}
                <div class="form-group">
                    <label for="image">Gambar</label>
                    @if($berita->image)
                        <img src="/image/berita/{{ $berita->image }}" class="img-fluid mb-3 d-block mx-auto" width="50%" alt="Gambar Berita">
                    @endif
                    <input type="file" class="form-control" id="image" name="image">
                    
                    @error('image')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <p>Masukan file dengan format jpg, jpeg, png!</p>
                </div>
                
                {{-- Link Berita --}}
                <div class="form-group">
                    <label for="link">Link Berita</label>
                    <input type="text" class="form-control" id="link" name="link" value="{{ $berita->link }}" >
                    @error('link')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <p>Masukan link berita jika ada!</p>
                </div>

                {{-- Submit --}}
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">Update Berita</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        new EasyMDE({ element: document.querySelector("textarea[name='deskripsi']")})
    });
</script>


@endsection
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.css">
    <script src="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.js"></script>
@endsection
