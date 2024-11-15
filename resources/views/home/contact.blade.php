@extends('websites.app')

@section('content')

    <!-- Breadcumbs -->
    <div class="breadcumbs py-2">
      <div class="container">
        <div
          class="d-flex justify-content-between align-items-center text-white"
        >
          <h2>Kontak</h2>
          <ol class="d-flex list-unstyled">
            <li>Beranda</li>
            <li>Kontak</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- End Breadcumbs -->

    <!-- contact -->
    <div class="contact mb-5">
      <div class="maps">
        <iframe
        src = "{!! $kontak -> maps!!}"
        width="100%"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
      <div class="container mt-5">
        <div class="row">
          <div class="col md-12">
            <div class="card border-0 shadow shadow-sm">
              <div class="card-body">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <i
                        class="fa fa-map-marker-alt fa-2x primary float-start me-4"
                      ></i>
                      <h4 class="fw-bolder">Lokasi</h4>
                      <p class="ms-5">
                        {{ $kontak -> alamat }}
                      </p>
                    </div>
                    <div class="col-md-4">
                      <i
                        class="fa fa-envelope fa-2x primary float-start me-3"
                      ></i>
                      <h4 class="fw-bolder">Email</h4>
                      <p class="ms-5">{{ $kontak -> email }}</p>
                    </div>
                    <div class="col-md-4">
                      <i class="fa fa-phone fa-2x primary float-start me-3"></i>
                      <h4 class="fw-bolder">Telephone</h4>
                      <p class="ms-5">
                        {{ $kontak -> phone }}
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="row mt-5">
          <div class="col md-12">
            <div class="card border-0 shadow">
              <div class="card-body p-4">
                <div class="row mt-4">
                  <div class="col-md-6">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Nama Pengirim "
                    />
                  </div>
                  <div class="col-md-6">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Email Pengirim "
                    />
                  </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Subjek">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <textarea name="" id="" class="form-control" placeholder="Pesan Pengirim"></textarea>
                    </div>
                </div>
                <div class="row mt-4">
                    <button type="submit" class="btn btn-submit">Kirim</button>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
    <!-- end contact -->

@endsection