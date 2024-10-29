@extends('websites.app')

@section('content')

    <!-- Breadcumbs -->
    <div class="breadcumbs py-2">
      <div class="container">
        <div
          class="d-flex justify-content-between align-items-center text-white"
        >
          <h2>Dokumentasi</h2>
          <ol class="d-flex list-unstyled">
            <li>Beranda</li>
            <li>Dokumentasi</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- End Breadcumbs -->

    <!-- Dokumentasi -->
    <div class="teams bg-light py-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">Dokumentasi</h2>
        </div>
        <p class="text-center mt-4">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum at
          consectetur, eligendi quibusdam inventore in ad temporibus soluta
          libero autem distinctio, impedit qui ab repudiandae velit. Quis
          dolorem molestias mollitia?
        </p>
        {{-- <div class="row mt-4">
            <div class="col-md-12 d-flex justify-content-center">
              <ul class="list-unstyled d-flex portfolio-filter">
                <li data-filter="*" class="py-2 px-4 filter-active text-white">All</li>
                <li data-filter=".filter-alam" class="py-2 px-4">Alam</li>
                <li data-filter=".filter-ekstrakurikuler" class="py-2 px-4">Ekstrakurikuler</li>
                <li data-filter=".filter-pramuka" class="py-2 px-4">Pramuka</li>
              </ul>
            </div>
          </div> --}}
          <div class="row mt-5">
            <div class="col-md-12">
              <div class="mansory portfolio-container" data-aos="zoom-in-up">
                <div class="mansory-sizer"></div>
                <div class="row">
                  @foreach ($dokumentasi as $item)
                      <div class="col-md-4 mansory-item m-2 portfolio-item filter-alam">
                          <a href="{{ asset('image/dokumentasi/' . $item->image) }}" 
                             data-lightbox="dokumentasi" 
                             data-title="{{ $item->nama }}">
                              <img src="{{ asset('image/dokumentasi/' . $item->image) }}" 
                                   alt="{{ $item->nama }}" 
                                   class="img-fluid" 
                                   style="max-height: 300px; width: 100%; object-fit: cover;">{{$item->nama}}
                          </a>
                      </div>
                  @endforeach
              </div>
              
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- End Dokumentasi -->


@endsection