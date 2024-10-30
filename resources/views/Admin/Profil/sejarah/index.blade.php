@extends('layouts.app')

@section('title', 'Data Sejarah Madrasah')

@section('content')
    <div class="container">

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show">
                <strong>Berhasil</strong>
                <p>{{ $message }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @foreach ($sejarahs as $sejarah)
            <div class="row mb-3">
                <!-- Gambar Sejarah -->
                <div class="col-md-4">
                    <img src="{{ asset('image/sejarah/' . $sejarah->foto) }}" alt="{{ $sejarah->foto }}" class="img-fluid rounded school-image">
                </div>

                <!-- Deskripsi Sejarah -->
                <div class="col-md-8">
                    <div class="school-description">
                        <p>
                            {{ $sejarah->deskripsi }}
                        </p>
                        <h5>Sejarah Singkat</h5>
                        <p>
                            {{ $sejarah->sejarahsingkat }}
                        </p>
                        <a href="{{ route('sejarah.edit', $sejarah->id) }}" class="btn btn-warning">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
