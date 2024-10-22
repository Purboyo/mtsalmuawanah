@extends('websites.app')

@section('content')
      <!-- Breadcumbs -->
      <div class="breadcumbs py-2">
        <div class="container">
          <div
            class="d-flex justify-content-between align-items-center text-white"
          >
            <h2>Sejarah</h2>
            <ol class="d-flex list-unstyled">
              <li>Beranda</li>
              <li>Sejarah</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- End Breadcumbs -->

      {{-- Profile Sekolah --}}
      <div class="container school-profile mt-5">
        <div class="row">
            <!-- Header Sekolah -->
            <div class="school-header col-12 text-center">
                <h1>MTS AL-MUAWANAH KAWUNGANTEN</h1>
            </div>
        </div>
    
        <div class="row mb-3">
            <!-- Gambar Sekolah -->
            <div class="col-md-4">
                <img src="image/20240910041044_i64jxXol.jpg" alt="Sekolah Image" class="img-fluid rounded school-image">
            </div>
    
            <!-- Deskripsi Sekolah -->
            <div class="col-md-8">
                <div class="school-description">
                    <p>
                        MTs. Al-Mu’awanah, Kecamatan Kawunganten didirikan pada tahun 1993, berlokasi di Dusun Tegalanyar Rt. 002/003 Desa Kalijeruk Kecamatan Kawunganten. Madrasah ini didirikan dalam upaya menyediakan pendidikan masyarakat di sekitar kecamatan Kawunganten yang tidak terjangkau oleh Madrasah lain yang telah ada.
                    </p>
    
                    <h5>Sejarah Singkat</h5>
                    <p>
                        Tahun demi tahun MTs. Al-Mu’awanah selalu mengalami perkembangan/ kemajuan, baik dari segi kualitas maupun kuantitas. Dari segi kualitas dapat diukur dari status akreditasi Madrasah yang meningkat terus (terakhir status terakreditasi dengan nilai B), prestasi akademik maupun non-akademik dari siswa-siswinya, serta fasilitas pendukung kegiatan belajar mengajar di Madrasah, dan lain sebagainya.
                    </p>
                </div>
            </div>
        </div>
      
    
    
        <div class="row info-table mt-4">
            <table>
                <tr>
                    <th>Nama</th>
                    <td>MTS Al-Mu’awanah</td>
                </tr>
                <tr>
                    <th>NPSN</th>
                    <td>20363371</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>Dusun Tegalanyar RT. 002/03.</td>
                </tr>
                <tr>
                    <th>Desa/Kelurahan</th>
                    <td>Kalijeruk</td>
                </tr>
                <tr>
                    <th>Kecamatan/Kota</th>
                    <td>Kawunganten / Cilacap</td>
                </tr>
                <tr>
                    <th>Kab.-Kota/Negara</th>
                    <td>Jawa Tengah / Indonesia</td>
                </tr>
                <tr>
                    <th>Status Sekolah</th>
                    <td>Swasta</td>
                </tr>
                <tr>
                    <th>Bentuk Pendidikan</th>
                    <td>Madrasah Tsanawiyah</td>
                </tr>
            </table>
        </div>
      </div>
      {{-- end Profil Sekolah --}}      

      <!-- About Us -->
      <div class="title mt-5">
        <div class="container">
          <div class="title-container">
            <h2 class="text-center fw-bold">PROFIL</h2>
          </div>
          <div class="row mt-5">
            <div class="col-md-6" data-aos="fade-right">
              <h3 class="fw-bold about-us-title">
                MTS Al-Mu'awanah Kecamatan Kawunganten
              </h3>
              <p class="fw-bolder mt-4 about-us-subtitle">
                Didirikan pada tahun 1993, berlokasi di Dusun Tegalanyar Rt. 002/003 Desa Kalijeruk Kecamatan Kawunganten. Madrasah ini didirikan dalam upaya menyediakan pendidikan masyarakat di sekitar kecamatan Kawunganten yang tidak terjangkau oleh Madrasah lain yang telah ada. 
              </p>
            </div>
            <div class="col-md-6" data-aos="fade-left">
              <p>
                Tahun demi tahun MTs Al-Mu’awanah selalu mengalami perkembangan atau kemajuan, baik dari segi kualitas maupun kuantitas . Dari segi kualitas dapat diukur dari status akreditasi Madrasah yang meningkat terus (terakhir status terakreditasi dengan nilai B), prestasi akademik maupun non akademik dari siswa-siswinya, serta fasilitas pendukung kegiatan belajar mengajar di Madrasah, dan lain sebagainya. Dan berikut adalah program unggulannya :
              </p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <div class="i fa fa-check-double primary"></div>
                  Tahfizul Qur’an
                </li>
                <li class="list-group-item">
                  <div class="i fa fa-check-double primary"></div>
                  Pembelajaran Iqro
                </li>
                <li class="list-group-item">
                  <div class="i fa fa-check-double primary"></div>
                  Boarding School
                </li>
              </ul>
              <p class="mt-2">
                Dalam kiprahnya di dunia pendidikan mulai dari sejak berdirinya sampai dengan saat ini, MTs Al-Mu’awanah telah berhasil mengukir banyak prestasi terutama pada lingkup kecamatan dan kabupaten, baik prestasi akademik maupun non akademik. 
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
                “Islami, Berakhlak Karimah, Berkualitas, Berprestasi dan Terampil”
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
                <li>Meletakan dasar-dasar keislaman dengan penerapan amaliyah dan menumbuhkan pengamalan ajaran Islam sehingga siswa dapat tekun beribadah.</li>
                <li>Membentuk manusia yang cerdas, terampil, mandiri dan berakhlakul karimah.</li>
                <li>Melaksanakan pembelajaran dan pendampingan secara efeketif sehingga setiap siswa dapat berkembang secara optimal.</li>
                <li>Melaksanakan tata tertib sekolah.</li>
                <li>Melaksanakan pembelajaran ekstrakurikuler secara kontinue berdasarkan minat dan bakat siswa, sehingga terwujud siswa yang terampil dan mandiri.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- end Visi dan Misi -->


    
      @endsection