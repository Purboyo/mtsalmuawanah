@extends('layouts.app')

@section('title', 'Data Dokumentasi')

@section('head')
    <style>
        
    </style>
@endsection

@section('content')

    <div class="container">
        <a href="{{ route('Dokumentasi.create') }}" class="btn btn-success mb-1">
            <i class="fa fa-plus"></i> Tambah Data
        </a>
        <!-- Button untuk membuka modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#filterModal">
    Kelola Filter
</button>

<!-- Modal untuk Filter -->
<div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="filterModalLabel">Kelola Filter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Daftar Filter -->
                <div class="row">
                    <div class="col-md-8">
                        <h6>Daftar Filter</h6>
                        <ul class="list-group">
                            @foreach ($filters as $filter)
                            <div class="col-md-4 mb-3">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <h6 class="card-title">{{ $filter->filter }}</h6>
                                        <form action="{{ route('filter.destroy', $filter->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus filter ini beserta semua dokumentasi yang terkait?')">
                                                Hapus Filter
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                        </ul>
                    </div>
                    
                    <!-- Form Tambah Filter -->
                    <div class="col-md-4">
                        <h6>Tambah Filter Baru</h6>
                        <div class="card shadow-sm p-3">
                            <form action="{{ route('filter.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="filterName" class="form-label">Nama Filter</label>
                                    <input type="text" class="form-control" id="filterName" name="filter" placeholder="Masukkan nama filter">
                                    @error('filter')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-success w-100">Tambah Filter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>


        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show">
                <strong>Berhasil!</strong>
                <p>{{ $message }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Filter -->
        <div class="row mt-4">
            <div class="col-md-12 d-flex justify-content-center">
                <ul class="list-unstyled d-flex portfolio-filter">
                    <li data-filter="*" class="py-2 px-4 filter-active">All</li>
                    @foreach ($filters as $item)
                        <li data-filter=".filter-{{ $item->id }}" class="py-2 px-4">{{ $item->filter }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- Kartu untuk Menampilkan Dokumentasi -->
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
            @foreach ($dokumentasis as $dokumentasi)
                <div class="col mb-4 filter-{{ $dokumentasi->filter_id }}" data-aos="fade-up">
                    <div class="card shadow-sm">
                        <img src="{{ asset('image/dokumentasi/' . $dokumentasi->image) }}" 
                             alt="{{ $dokumentasi->nama }}" 
                             class="card-img-top"
                             style="max-height: 300px; max-width: 100%; object-fit: cover;">
                        
                        <div class="card-body text-center">
                            <h5 class="card-text">{{ $dokumentasi->nama }}</h5>        
                            <p class="card-text">Filter : {{ $dokumentasi->filter ? $dokumentasi->filter->filter : 'Tidak ada filter' }}</p>
                            <!-- Tombol Edit dan Hapus -->
                            <div class="d-flex justify-content-center mt-3">
                                <a href="{{ route('Dokumentasi.edit', $dokumentasi->id) }}" class="btn btn-warning me-2">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('Dokumentasi.destroy', $dokumentasi->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        <i class="fa fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Script untuk Filter -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.portfolio-filter li').on('click', function () {
                // Hapus class aktif dari semua filter
                $('.portfolio-filter li').removeClass('filter-active');
                // Tambahkan class aktif ke filter yang diklik
                $(this).addClass('filter-active');

                // Dapatkan filter yang dipilih
                const filterValue = $(this).attr('data-filter');

                if (filterValue === '*') {
                    $('.col').show(); // Tampilkan semua elemen
                } else {
                    // Sembunyikan semua elemen dokumentasi
                    $('.col').hide();
                    // Tampilkan hanya elemen yang sesuai filter
                    $(filterValue).show();
                }
            });
        });
    </script>

@endsection
