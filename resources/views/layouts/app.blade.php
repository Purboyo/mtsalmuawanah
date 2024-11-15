<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  {{-- favicon --}}
  <link rel="icon" href="{{ asset('assets/img/logo.jpeg') }}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Theme style -->
  <link rel="stylesheet" href="/Lte/dist/css/adminlte.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
  <!-- Include Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Include Lightbox CSS -->
  <link href="/assets/vendor/lightbox2/dist/css/lightbox.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
  <!-- Include Custom CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}" />
  <style>


  </style>
</head>
<body class="hold-transition sidebar-mini">
  @php
    $currentSegment = request()->segment(1);
  @endphp

<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <img src="/assets/img/logo.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">MTS Al-Muawanah</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ Auth::user()->image }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info ms-3">
          <a href="#" class="d-block text-white" data-bs-toggle="modal" data-bs-target="#userModal">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item @if(in_array($currentSegment, ['dashboard'])) menu-open @else menu-close @endif">
                <a href="/dashboard" class="nav-link ">
                    <i class="nav-icon fa-solid fa-circle-info"></i>
                    <p>
                    Dashboard
                    </p>
                </a>
              </li>
            <li class="nav-item">
                <a href="/" target="_blank" class="nav-link">
                    <i class="nav-icon fa-solid fa-arrow-up-right-from-square"></i>
                    <p>
                    Website
                    </p>
                </a>
              </li>

            {{-- Beranda --}}
            <li class="nav-item @if(in_array($currentSegment, ['sliders', 'sambutan', 'statistik', 'beranda'])) menu-open @else menu-close @endif">
                <a href="{{route('beranda.index')}}" class="nav-link @if(in_array($currentSegment, ['sliders', 'sambutan', 'statistik'])) @endif">
                    <i class="nav-icon fa-solid fa-house"></i>
                    <p>
                        Data Beranda
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('sliders.index')}}" class="nav-link @if($currentSegment == 'sliders') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Slider</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('sambutan.index')}}" class="nav-link @if($currentSegment == 'sambutan') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Sambutan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('statistik.index')}}" class="nav-link @if($currentSegment == 'statistik') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Statistik</p>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="{{route('beranda.index')}}" class="nav-link @if($currentSegment == 'beranda') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Beranda</p>
                        </a>
                    </li> --}}
                </ul>
            </li>


          {{-- Profil --}}
          <li class="nav-item @if(in_array($currentSegment, ['struktur', 'fasilitas', 'visimisi', 'profil', 'sejarah','deskripsi'])) menu-open @else menu-close @endif">
            <a href="#" class="nav-link @if(in_array($currentSegment, ['struktur', 'fasilitas', 'visimisi', 'profil', 'sejarah','deskripsi'])) @endif">
                <i class="nav-icon fa-solid fa-landmark"></i>
                <p>
                Data Profil
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('sejarah.index')}}" class="nav-link  @if($currentSegment == 'sejarah') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Sejarah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('deskripsi.index')}}" class="nav-link @if($currentSegment == 'deskripsi') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Deskripsi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('profil.index')}}" class="nav-link @if($currentSegment == 'profil') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Profil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('visimisi.index')}}" class="nav-link @if($currentSegment == 'visimisi') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Visi Misi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('struktur.index')}}" class="nav-link @if($currentSegment == 'struktur') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Struktur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('fasilitas.index')}}" class="nav-link @if($currentSegment == 'fasilitas') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Fasilitas</p>
                </a>
              </li>
            </ul>
          </li>
          
          {{-- PPDB --}}
          <li class="nav-item @if(in_array($currentSegment, ['ppdb', 'addppdb', 'listppdb'])) menu-open @else menu-close @endif">
            <a href="#" class="nav-link @if(in_array($currentSegment, ['ppdb', 'addppdb', 'listppdb'])) @endif">
                <i class="nav-icon fa-solid fa-user-plus"></i>
                <p>
                Data PPDB
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('ppdb.index')}}" class="nav-link @if($currentSegment == 'ppdb' || $currentSegment == 'listppdb') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PPDB</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('addppdb.index')}}" class="nav-link @if($currentSegment == 'addppdb') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Tambahan</p>
                </a>
            </ul>
          </li>

          {{-- Pendidikan --}}
          <li class="nav-item @if(in_array($currentSegment, ['Prestasi', 'P5ra', 'Organisasi', 'Ekstrakurikuler'])) menu-open @else menu-close @endif">
            <a href="#" class="nav-link @if(in_array($currentSegment, ['Prestasi', 'P5ra', 'Organisasi', 'Ekstrakurikuler'])) @endif">
                <i class="nav-icon fa-solid fa-chalkboard-user"></i>
                <p>
                Data Pendidikan
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('Prestasi.index')}}" class="nav-link @if($currentSegment == 'Prestasi') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Prestasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('P5ra.index')}}" class="nav-link @if($currentSegment == 'P5ra') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data P5RA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('Organisasi.index')}}" class="nav-link @if($currentSegment == 'Organisasi') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Organisasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('Ekstrakurikuler.index')}}" class="nav-link @if($currentSegment == 'Ekstrakurikuler') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data EkstraKuriKuler</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- Berita --}}
          <li class="nav-item @if(in_array($currentSegment, ['Berita'])) menu-open @else menu-close @endif">
            <a href="{{route('Berita.index')}}" class="nav-link">
                <i class="nav-icon fa-regular fa-newspaper"></i>
              <p>
                Berita
              </p>
            </a>
          </li>
          {{-- Dokumentasi --}}
          <li class="nav-item @if(in_array($currentSegment, ['Dokumentasi'])) menu-open @else menu-close @endif">
            <a href="{{route ('Dokumentasi.index')}}" class="nav-link">
                <i class="nav-icon fa-regular fa-images"></i>
              <p>
                Dokumentasi
              </p>
            </a>
          </li>
          {{-- Kontak --}}
          <li class="nav-item @if(in_array($currentSegment, ['Kontak'])) menu-open @else menu-close @endif">
            <a href="{{route('Kontak.index')}}" class="nav-link">
                <i class="nav-icon fa-regular fa-address-card"></i>
              <p>
                Kontak
              </p>
            </a>
          </li>
          {{-- Link --}}
          <li class="nav-item @if(in_array($currentSegment, ['Link'])) menu-open @else menu-close @endif">
            <a href="{{route('Link.index')}}" class="nav-link">
                <i class="nav-icon fa fa-link"></i>
              <p>
                Link
              </p>
            </a>
          </li>
          {{-- Logout --}}
          <li class="nav-item">
            <a href="/logout" class="nav-link">
            <i class="nav-icon fa-solid fa-right-from-bracket"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('title')</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-success card-outline">
              <div class="card-header">
                <h5 class="m-0">@yield('title')</h5>
              </div>
              <div class="card-body">
                @yield('content')
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- User Info Modal -->
  <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content bg-whitesmoke">
        <div class="modal-header">
          <h5 class="modal-title" id="userModalLabel">Informasi Pengguna</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container-fluid bg-body-secondary mb-3">
            <div class="container text-center mb-3">
              <img src="{{ Auth::user()->image }}" class="img-circle elevation-2" alt="User Image" style="width: 100px; height: 100px; ">
            </div>
          </div>
          <h5 class="card-title fw-bold mb-3">{{ Auth::user()->name }}</h5>
          <p class="card-text"><strong>Email:</strong> {{ Auth::user()->email }}</p>
          <p class="card-text"><strong>Password:</strong> <span id="password-display">••••••••</span>
            <span id="password" style="display: none;">{{ Auth::user()->password }}</span>
            <button class="btn btn-link text-black" id="toggle-password" onclick="togglePassword()">
              <i id="eye-icon" class="fa fa-eye-slash text-black"></i>
            </button>            
          </p>
          <p class="card-text"><strong>Role:</strong> {{ Auth::user()->role }}</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <strong>Copyright &copy; {{date('Y')}} <a href="" class="text-green">MTS Al-Muawanah</a>.</strong> Designed by Purboyo Broto Umbaran.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/Lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/Lte/dist/js/adminlte.min.js"></script>
<!-- fontawesome -->
<script src="/assets/vendor/fontawesome/js/all.min.js"></script>
<!-- Include jQuery (required for Select2) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Include Select2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<!-- lightbox2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

<script>
    $(document).ready(function() {
        // Inisialisasi select2 pada ikon
        $('.ikon-select').select2({
            templateResult: formatIcon, // Untuk pratinjau ikon
            templateSelection: formatIcon,
            escapeMarkup: function(markup) { return markup; } // Biarkan markup HTML ditampilkan
        });

        // Fungsi untuk menampilkan ikon pada dropdown
        function formatIcon (icon) {
            if (!icon.id) { return icon.text; }
            var $icon = $( 
                '<span><i class="' + $(icon.element).data('icon') + '"></i> ' + icon.text + '</span>' 
            ); 
            return $icon; 
        } 
    });
</script>
<script>
  function togglePassword() {
      const passwordField = document.getElementById('password');
      const passwordDisplay = document.getElementById('password-display');
      const eyeIcon = document.getElementById('eye-icon');

      if (passwordField.style.display === "none") {
          passwordField.style.display = "inline";
          passwordDisplay.style.display = "none";
          eyeIcon.classList.remove('fa-eye-slash');
          eyeIcon.classList.add('fa-eye');
      } else {
          passwordField.style.display = "none";
          passwordDisplay.style.display = "inline";
          eyeIcon.classList.remove('fa-eye');
          eyeIcon.classList.add('fa-eye-slash');
      }
  }
</script>
</body>
</html>
