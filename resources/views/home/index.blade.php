@extends('websites.app')

@section('title', 'MTS Al-Mu\'awanah')


@section('content')

    <!-- caroursel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
          @foreach($sliders as $key => $slider)
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $key }}" 
                  class="{{ $key == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $key + 1 }}">
              </button>
          @endforeach
      </div>
  
      <div class="carousel-inner">
          @foreach($sliders as $key => $slider)
          <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
              <img src="{{ asset('image/slider/' . $slider->image) }}" class="d-block w-100" alt="{{ $slider->title }}">
              <div class="carousel-caption d-none d-md-block">
                  <h5>{{ $slider->title }}</h5>
                  <p>{{ $slider->description }}</p>
              </div>
          </div>
          @endforeach
      </div>
  
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
      </button>
    </div>  
    <!-- end caroursel -->

    {{-- Sambutan Kepala Sekolah --}}
    <div class="container sambutan-section">
      <div class="title-container">
        <h2 class="text-center fw-bold">Sambutan Kepala Sekolah</h2>
      </div>
      <div class="row justify-content-center mt-4" data-aos="fade-up">
        <div class="col-md-10">
          <div class="sambutan-card text-center">
            <img src="{{ asset('image/sambutan/'. $sambutans->gambar) }}" alt="Kepala Sekolah" />
            <p>
              {!! nl2br(e($sambutans->konten)) !!}
              <br /><br />
              <strong>{{ $sambutans->nama }}</strong><br />
              {{ $sambutans->jabatan }}
            </p>
          </div>
        </div>
      </div>
    </div>
    {{-- end Sambutan Kepala Sekolah --}}

    <!-- About Us -->
    <div class="title mt-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">PROFIL</h2>
        </div>
        <div class="row mt-5">
          <div class="col-md-6" data-aos="fade-right">
            <h3 class="fw-bold about-us-title">
              {{$profils->judul}}
            </h3>
            <p class="fw-bolder mt-4 about-us-subtitle">
              {{$profils->subjudul}}
            </p>
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <p>
              {{ $profils->sejarahsingkat }}
            </p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <div class="i fa fa-check-double primary"></div>
                {{ $profils->list1 }}
              </li>
              <li class="list-group-item">
                <div class="i fa fa-check-double primary"></div>
                {{ $profils->list2 }}
              </li>
              <li class="list-group-item">
                <div class="i fa fa-check-double primary"></div>
                {{ $profils->list3 }}
              </li>
            </ul>
            <p class="mt-2">
              {{ $profils->penutup}}
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- end About Us -->

    <!-- Visi dan Misi -->
    <div class="container mt-5">
      <div class="row">
        <!-- Kolom Kiri: Visi -->
        <div class="col-md-6">
          <div class="p-4 ">        
            <div class="title-container">
            <h2 class="text-center fw-bold">VISI</h2>
          </div>
            <p class="fw-bolder text-center mt-4 about-us-subtitle" data-aos="fade-right">
              “{{ $visis->visi }}”
            </p>
          </div>
        </div>
        <!-- Kolom Kanan: Misi -->
        <div class="col-md-6">
          <div class="p-4 ">
            <div class="title-container">
              <h2 class="text-center fw-bold">MISI</h2>
            </div>
            <ul class="mt-4 list-group list-group-flush" data-aos="fade-left">
              @foreach($misis as $misi)
              <li>{{ $misi->misi }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end Visi dan Misi -->

    {{-- Statitstik Sekolah --}}
    <div class="container mt-5">
      <div class="title-container">
        <h2 class="text-center fw-bold">STATISTIK</h2>
      </div>
      <div class="row mt-4" data-aos="fade-up">
        <!-- Jumlah Siswa -->
        <div class="col-md-4">
          <div class="statistik-card">
            <div class="icon">
              <i class="fas fa-users"></i>
            </div>
            <h1 class="fw-bolder">{{ $statistiks->siswa }}</h1>
            <p>Jumlah Siswa</p>
          </div>
        </div>
        <!-- Jumlah Guru -->
        <div class="col-md-4">
          <div class="statistik-card">
            <div class="icon">
              <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <h1 class="fw-bolder">{{ $statistiks->guru }}</h1>
            <p>Jumlah Guru</p>
          </div>
        </div>
        <!-- Jumlah Karyawan -->
        <div class="col-md-4">
          <div class="statistik-card">
            <div class="icon">
              <i class="fas fa-user-tie"></i>
            </div>
            <h1 class="fw-bolder">{{ $statistiks->karyawan }}</h1>
            <p>Jumlah Karyawan</p>
          </div>
        </div>
      </div>
    </div>
    {{-- end Statistik --}}


    <!-- Berita Section -->
    <div class="berita py-5">
      <div class="container ">
        <div class="title-container text-center mb-5">
          <h2 class="fw-bold">Berita Terbaru</h2>
        </div>        
        <!-- Grid for news items -->
        @foreach ($beritas as $index => $berita)
          <div class="row mb-5 align-items-stretch">
            @if ($index % 2 == 0)
              <!-- Gambar di Kanan untuk Berita Genap -->
              <div class="col-md-6 order-md-2 mb-3 d-flex" data-aos="fade-right">
                <div class="ratio ratio-16x9 w-100">
                  <img src="{{ asset('image/berita/'. $berita->image) }}" class="img-fluid rounded" alt="{{ $berita->judul }}" style="object-fit: cover;">
                </div>
              </div>
              <div class="col-md-6 order-md-1 d-flex" data-aos="fade-left">
                <div class="card h-100 w-100 border-0">
                  <div class="card-body d-flex flex-column justify-content-center">
                    <h5 class="fw-bold">{{ $berita->judul }}</h5>
                    <p class="text-muted">
                      {{ implode(' ', array_slice(explode(' ', $berita->deskripsisingkat), 0, 100)) }}...
                    </p>
                    <p class="">
                      Link : <a href="{{ $berita->link }}" target="_blank" class="text-primary">{{ $berita->link }}</a>
                    </p>
                    <p >
                      <small>Waktu terbit : {{ $berita->tanggal }}</small>
                    </p>
                    <a href="/detailberita/{{ $berita->id }}" class="btn btn-success mt-auto">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            @else
              <!-- Gambar di Kiri untuk Berita Ganjil -->
              <div class="col-md-6 mb-3 d-flex" data-aos="fade-right">
                <div class="ratio ratio-16x9 w-100">
                  <img src="{{ asset('image/berita/'. $berita->image) }}" class="img-fluid rounded" alt="{{ $berita->judul }}" style="object-fit: cover;">
                </div>
              </div>
              <div class="col-md-6 d-flex" data-aos="fade-left">
                <div class="card h-100 w-100 border-0">
                  <div class="card-body d-flex flex-column justify-content-center">
                    <h5 class="fw-bold">{{ $berita->judul }}</h5>
                    <p class="text-muted">
                      {{ implode(' ', array_slice(explode(' ', $berita->deskripsisingkat), 0, 100)) }}...
                    </p>
                    <p class="">
                      Link : <a href="{{ $berita->link }}" target="_blank" class="text-primary">{{ $berita->link }}</a>
                    </p>
                    <p >
                      <small>Waktu terbit : <strong>{{ $berita->tanggal }}</strong></small>
                    </p>
                    <a href="/detailberita/{{ $berita->id }}" class="btn btn-success mt-auto">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            @endif
          </div>
        @endforeach

      </div>
    </div>
    <!-- End Berita Section -->



    @endsection
