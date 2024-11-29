<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', "MTS Al-Mu'awanah")</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/logo.jpeg') }}" type="image/x-icon" />
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome/css/all.min.css') }}" />
    <!-- AOS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/aos/dist/aos.css') }}" />
  </head>
  <body class="body">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
      <div class="container">
        <img src="{{ asset('assets/img/logo.jpeg') }}" alt="Logo MTS Al-Mu'awanah" class="logo" />
        <a class="navbar-brand fw-bold" href="#">
          <span class="primary">MTS</span> AL-MU'AWANAH
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link fw-bold {{ Request::is('/') ? 'active' : '' }}" href="../">Beranda</a>
            </li>
            <!-- Dropdown Profil -->
            <li class="nav-item dropdown">
              <a
                class="nav-link fw-bold dropdown-toggle {{ Request::is('sejarahalmuawanah', 'strukturorganisasi', 'fasilitasmadrasah') ? 'active' : '' }}"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Profil
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../sejarahalmuawanah">Sejarah</a></li>
                <li><a class="dropdown-item" href="../strukturorganisasi">Struktur Organisasi</a></li>
                <li><a class="dropdown-item" href="../fasilitasmadrasah">Fasilitas</a></li>
              </ul>
            </li>
            <!-- PPDB -->
            <li class="nav-item">
              <a class="nav-link fw-bold {{ Request::is('ppdbmtsalmuawanah') ? 'active' : '' }}" href="../ppdbmtsalmuawanah">PPDB</a>
            </li>
            <!-- Pendidikan Dropdown -->
            <li class="nav-item dropdown">
              <a
                class="nav-link fw-bold dropdown-toggle {{ Request::is('prestasi', 'p5ra', 'organisasi') ? 'active' : '' }}"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Pendidikan
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../prestasi">Prestasi</a></li>
                <li><a class="dropdown-item" href="../p5ra">P5RA</a></li>
                <li><a class="dropdown-item" href="../organisasi">Organisasi dan Ekstrakurikuler</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold active" href="../beritaterkini">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold {{ Request::is('dokumentasi', ) ? 'active' : '' }}" href="../dokumentasi">Dokumentasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold {{ Request::is('contact') ? 'active' : '' }}" href="../contact">Kontak Kami</a>
            </li>
            <li class="nav-item">
              @if(!Auth::check()) <!-- Cek jika pengguna belum login -->
                <a class="nav-link fw-bold {{ Request::is('login') ? 'active' : '' }}" href="../login">Login <i class="fa fa-user"></i></a>
              @endif            
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Main Content -->
    <main>
      <!-- Breadcumbs -->
      <div class="breadcumbs py-2">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center text-white">
            <h2>Berita</h2>
            <ol class="d-flex list-unstyled">
              <li><a href="/" class="text-white text-decoration-none">Beranda</a></li>
              <li class="ms-2">Berita</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- End Breadcumbs -->
      <div class="container mt-5">
        <a href="/beritaterkini" class="btn btn-outline-success mb-3">Kembali</a>
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="card shadow-lg">
              <div class="card-body">
                <h1 class="mb-3">{{ $berita->judul }}</h1>
                <p class="text-muted">Diterbitkan pada: <strong>{{ $berita->tanggal }}</strong></p>
                <h5 class="fw-bold mb-4">{!! Markdown::convertToHtml ($berita->deskripsisingkat) !!}</h5>
                @if($berita->image)
                  <img src="/image/berita/{{ $berita->image }}" class="img-fluid rounded mb-4 d-block mx-auto" alt="Gambar Berita">
                @endif
                <p>{!! Markdown::convertToHtml ($berita->deskripsi) !!}</p>
                <a href="{{ $berita->link }}" target="_blank" class="btn btn-outline-primary mt-4"><strong>Link ...</strong></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </main>


    <!-- Footer -->
    <footer class="mt-5">
      <div class="footer-top bg-dark text-white py-4">
        <div class="container">
          <div class="row justify-content-center">
            <!-- Info Madrasah -->
            <div class="col-md-3 text-center mb-4 mb-md-0">
              <h4 class="fw-bold">MADRASAH</h4>
              <p>Tsanawiyah Al-Mu'Awanah Kawunganten</p>
              <strong>Telephone:</strong> <span>+628123456789</span><br>
              <strong>Email:</strong> <span>EmailMadrasah@gmail.com</span>
            </div>
            <!-- Links Section -->
            <div class="col-md-3 text-center">
              <h4 class="fw-bold">Useful Links</h4>
              <ul class="list-unstyled">
                <li><a href="/" class="text-decoration-none text-white"><i class="fa fa-chevron-right primary"></i> Beranda</a></li>
                <li><a href="../sejarahalmuawanah" class="text-decoration-none text-white"><i class="fa fa-chevron-right primary"></i> Profil</a></li>
                <li><a href="../ppdbmtsalmuawanah" class="text-decoration-none text-white"><i class="fa fa-chevron-right primary"></i> PPDB</a></li>
                <li><a href="../beritaterkini" class="text-decoration-none text-white"><i class="fa fa-chevron-right primary"></i> Berita</a></li>
                <li><a href="../dokumentasi" class="text-decoration-none text-white"><i class="fa fa-chevron-right primary"></i> Dokumentasi</a></li>
                <li><a href="../contact" class="text-decoration-none text-white"><i class="fa fa-chevron-right primary"></i> Kontak Kami</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-down bg-darker text-white py-3">
        <div class="container">
          <div class="row align-items-center">
            <!-- Copyright -->
            <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
              <div>&copy; <strong>MTS Al-Mu'Awanah</strong>. All Rights Reserved</div>
              <div>Designed by Purboyo Broto Umbaran</div>
            </div>
            <!-- Social Links -->
            <div class="col-md-6 text-center text-md-end">
              <div class="social-links">
                <a href="{{$links->facebook}}" target="_blank" class="mx-2"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="{{$links->instagram}}"  target="_blank"  class="mx-2"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="{{$links->youtube}}"  target="_blank"  class="mx-2"><i class="fab fa-youtube fa-2x"></i></a>
                <a href="{{$links->whatsapp}}"  target="_blank"  class="mx-2"><i class="fab fa-whatsapp fa-2x"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </footer>
      <!-- End Footer -->

    <!-- to top -->
    <a href="#" class="back-to-top rounded-circle p-3" id="backToTop">
      <i class="fa-solid fa-chevron-up"></i>
    </a>
    <!-- end to top -->

    <!-- JS Libraries -->
    <script src="{{ asset('assets/vendor/jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/fontawesome/js/all.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/mansory/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/dist/aos.js') }}"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
