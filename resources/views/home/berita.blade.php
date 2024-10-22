@extends('websites.app')

@section('content')
    <!-- Breadcumbs -->
    <div class="breadcumbs py-2">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center text-white">
          <h2>Berita</h2>
          <ol class="d-flex list-unstyled">
            <li><a href="/" class="text-white text-decoration-none">Beranda</a></li>
            <li>Berita</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- End Breadcumbs -->

    <!-- Berita Section -->
    <div class="berita py-5">
      <div class="container">
        <div class="title-container text-center mb-4">
          <h2 class="fw-bold">Berita Terbaru</h2>
          <p class="text-muted">Update terbaru dari kegiatan dan acara kami.</p>
        </div>

        <!-- Data Statis Berita -->
        @php
        $beritas = [
            ['judul' => 'Berita 1', 'deskripsi' => 'Deskripsi singkat berita 1...', 'gambar' => 'assets/img/berita1.jpg'],
            ['judul' => 'Berita 2', 'deskripsi' => 'Deskripsi singkat berita 2...', 'gambar' => 'assets/img/berita2.jpg'],
            ['judul' => 'Berita 3', 'deskripsi' => 'Deskripsi singkat berita 3...', 'gambar' => 'assets/img/berita3.jpg'],
            ['judul' => 'Berita 4', 'deskripsi' => 'Deskripsi singkat berita 4...', 'gambar' => 'assets/img/berita4.jpg'],
        ];
        @endphp

        @foreach ($beritas as $index => $berita)
          <div class="row mb-4">
            @if ($index % 2 == 0)
              <!-- Gambar di Kanan untuk Berita Genap -->
              <div class="col-md-6 mb-3">
                <img src="assets/img/p1.jpg" class="img-fluid" alt="{{ $berita['judul'] }}">
              </div>
              <div class="col-md-6 d-flex align-items-center">
                <div>
                  <h5 class="fw-bold">{{ $berita['judul'] }}</h5>
                  <p class="text-muted">{{ $berita['deskripsi'] }}</p>
                  <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
              </div>
            @else
              <!-- Gambar di Kiri untuk Berita Ganjil -->
              <div class="col-md-6 d-flex align-items-center">
                <div>
                  <h5 class="fw-bold">{{ $berita['judul'] }}</h5>
                  <p class="text-muted">{{ $berita['deskripsi'] }}</p>
                  <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <img src="assets/img/p2.jpg" class="img-fluid" alt="{{ $berita['judul'] }}">
              </div>
            @endif
          </div>
        @endforeach

      </div>
    </div>
    <!-- End Berita Section -->
@endsection
