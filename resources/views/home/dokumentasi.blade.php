<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', "MTS Al-Mu'awanah")</title>
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
              <a class="nav-link fw-bold" href="../berita">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold {{ Request::is('dokumentasi', ) ? 'active' : '' }}" href="../dokumentasi">Dokumentasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold {{ Request::is('contact') ? 'active' : '' }}" href="../contact">Kontak Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold {{ Request::is('login') ? 'active' : '' }}" href="../login">Login <i class="fa fa-user"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

        <!-- Breadcumbs -->
        <div class="breadcumbs py-2">
          <div class="container">
            <div class="d-flex justify-content-between align-items-center text-white">
              <h2>Dokumentasi</h2>
              <ol class="d-flex list-unstyled">
                <li><a href="/" class="text-white text-decoration-none">Beranda</a></li>
                <li class="ms-2">Dokumentasi</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- End Breadcumbs -->

    <!-- Main Content -->
    <main class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold">Dokumentasi</h2>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="row">
                        @foreach ($dokumentasi as $item)
                        <div class="col-md-4 mb-4">
                            <img src="{{ asset('image/dokumentasi/' . $item->image) }}" alt="{{ $item->nama }}" class="img-fluid" style="max-height: 300px; width: 100%; object-fit: cover;" data-bs-toggle="modal" data-bs-target="#imageModal{{ $item->id }}">
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="imageModal{{ $item->id }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $item->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imageModalLabel{{ $item->id }}">{{ $item->nama }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ asset('image/dokumentasi/' . $item->image) }}" alt="{{ $item->nama }}" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End Main Content -->

    <!-- Footer -->
    <footer class="mt-5">
        <div class="footer-top bg-dark text-white py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-3 text-center mb-4 mb-md-0">
                        <h4 class="fw-bold">MADRASAH</h4>
                        <p>Tsanawiyah Al-Mu'Awanah Kawunganten</p>
                        <strong>Telephone:</strong> <span>+628123456789</span><br>
                        <strong>Email:</strong> <span>EmailMadrasah@gmail.com</span>
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
                  <a href="https://www.facebook.com/mts.almuawanah.3/" target="_blank" class="mx-2"><i class="fab fa-facebook fa-2x"></i></a>
                  <a href="https://www.instagram.com/mts_almuawanah_cilacap?igsh=cWVhZHc0Y2Zvc3Jl"  target="_blank"  class="mx-2"><i class="fab fa-instagram fa-2x"></i></a>
                  <a href="https://www.youtube.com/@MTsAl-MuawanahKawunganten"  target="_blank"  class="mx-2"><i class="fab fa-youtube fa-2x"></i></a>
                  <a href="https://wa.me/81225218812"  target="_blank"  class="mx-2"><i class="fab fa-whatsapp fa-2x"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </footer>
    <!-- End Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
    <script>
        $(document).ready(function() {
            // Inisialisasi AOS
            AOS.init();
        });
    </script>
</body>
</html>
