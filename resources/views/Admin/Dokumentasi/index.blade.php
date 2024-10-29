@extends('layouts.app')

@section('title', 'Data Dokumentasi')

@section('content')

    <div class="container">
        <a href="{{ route('Dokumentasi.create') }}" class="btn btn-success mb-3">
            <i class="fa fa-plus"></i> Tambah Data
        </a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show">
                <strong>Berhasil!</strong>
                <p>{{ $message }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- Kartu untuk Menampilkan Dokumentasi --}}
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($dokumentasis as $dokumentasi)
                <div class="col mb-4" data-aos="fade-up">
                    <div class="card shadow-sm">
                        <img src="{{ asset('image/dokumentasi/' . $dokumentasi->image) }}" 
                             alt="{{ $dokumentasi->nama }}" 
                             class="card-img-top"
                             style="max-height: 300px; max-width: 100%; object-fit: cover;">
                        
                        <div class="card-body text-center">
                            <h5 class="card-text">{{ $dokumentasi->nama }}</h5>        
                            <!-- Tombol Edit dan Hapus -->
                            <div class="d-flex justify-content-center mt-3">
                                <a href="{{ route('Dokumentasi.edit', $dokumentasi->id) }}" class="btn btn-warning me-2">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('Dokumentasi.destroy', $dokumentasi->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        <i class="fa fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
