@extends('websites.app')

@section('content')
    <!-- Breadcumbs -->
    <div class="breadcumbs py-2">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center text-white">
          <h2>P5RA</h2>
          <ol class="d-flex list-unstyled">
            <li><a href="/" class="text-white text-decoration-none">Beranda</a></li>
            <li>P5RA</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- End Breadcumbs -->

    <!-- P5RA Section -->
    <div class="p5ra py-5 bg-light">
      <div class="container">
        <div class="title-container text-center">
          <h2 class="fw-bold">P5RA:  Proyek Penguatan Profil Pelajar Pancasila dan Rahmatan Lil'alaamin</h2>
        </div>
        <div class="text-center">
          <p class="text-muted mt-2">Menjelajahi berbagai aspek dari P5RA yang menjadi bagian dari institusi kami.</p>
        </div>

        @foreach ($p5ras as $item)
            
        <!-- Education Section -->
        <div class="row mt-5">
          <div class="col-md-6 mb-4" data-aos="fade-up">
            <div class="card shadow-sm">
              <img src="{{ asset('image/p5ra/'. $item->gambar) }}" class="card-img-top" alt="Pendidikan">
              <div class="card-body">
                <h5 class="card-title fw-bold">{{ $item->judul }}</h5>
                <p class="card-text text-muted">{{ $item->deskripsi }}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- End P5RA Section -->
@endsection
