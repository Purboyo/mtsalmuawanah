<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', "MTS Al-Mu'awanah")</title>
    <link rel="icon" href="{{ asset('assets/img/logo.jpeg') }}" type="image/x-icon" />
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome/css/all.min.css') }}" />
    <!-- AOS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/aos/dist/aos.css') }}" />
    <!-- Custom CSS2 -->
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}" />
  </head>
  <body class="body">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top py-3">
    <div class="container">
      <!-- Logo -->
      <img src="{{ asset('assets/img/logo.jpeg') }}" alt="Logo MTS Al-Mu'awanah" class="logo" />
      <a class="navbar-brand fw-bold" href="#">
        <span class="primary">MTS</span> AL-MU'AWANAH
      </a>
      <!-- Toggle Button -->
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
      <!-- Navbar Links -->
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
              <li><a class="dropdown-item {{ Request::is('sejarahalmuawanah') ? 'active' : '' }}" href="../sejarahalmuawanah">Sejarah</a></li>
              <li><a class="dropdown-item {{ Request::is('strukturorganisasi') ? 'active' : '' }}" href="../strukturorganisasi">Struktur Organisasi</a></li>
              <li><a class="dropdown-item {{ Request::is('fasilitasmadrasah') ? 'active' : '' }}" href="../fasilitasmadrasah">Fasilitas</a></li>
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
              <li><a class="dropdown-item {{ Request::is('prestasi') ? 'active' : '' }}" href="../prestasi">Prestasi</a></li>
              <li><a class="dropdown-item {{ Request::is('p5ra') ? 'active' : '' }}" href="../p5ra">P5RA</a></li>
              <li><a class="dropdown-item {{ Request::is('organisasi') ? 'active' : '' }}" href="../organisasi">Organisasi dan Ekstrakurikuler</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold {{ Request::is('beritaterkini') ? 'active' : '' }}" href="../beritaterkini">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold {{ Request::is('dokumentasi') ? 'active' : '' }}" href="../dokumentasi">Dokumentasi</a>
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
    <main class="">
      @yield('content')
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
            <div class="col-md-3" style="padding-left: 5%">
              <h4 class="fw-bold">Useful Links</h4>
              <ul class="list-unstyled">
                <li><a href="/" class="text-decoration-none text-white"><i class="fa fa-chevron-right primary"></i> Beranda</a></li>
                <li><a href="sejarahalmuawanah" class="text-decoration-none text-white"><i class="fa fa-chevron-right primary"></i> Profil</a></li>
                <li><a href="ppdbmtsalmuawanah" class="text-decoration-none text-white"><i class="fa fa-chevron-right primary"></i> PPDB</a></li>
                <li><a href="beritaterkini" class="text-decoration-none text-white"><i class="fa fa-chevron-right primary"></i> Berita</a></li>
                <li><a href="dokumentasi" class="text-decoration-none text-white"><i class="fa fa-chevron-right primary"></i> Dokumentasi</a></li>
                <li><a href="contact" class="text-decoration-none text-white"><i class="fa fa-chevron-right primary"></i> Kontak Kami</a></li>
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


    <!-- jQuery -->
    <script src="assets/vendor/jquery/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Lightbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <!-- Font Awesome -->
    <script src="assets/vendor/fontawesome/js/all.min.js"></script>
    <!-- Masonry -->
    <script src="assets/vendor/mansory/masonry.pkgd.min.js"></script>
    <!-- Isotope -->
    <script src="assets/vendor/isotop/isotope.pkgd.min.js"></script>
    <!-- AOS -->
    <script src="assets/vendor/aos/dist/aos.js"></script>
    <!-- Custom App JS -->
    <script src="assets/js/app.js"></script>

    <script>
      AOS.init();
    </script>

    

  </body>