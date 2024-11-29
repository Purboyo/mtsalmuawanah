@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h4 data-aos="fade-up">Selamat datang, {{ Auth::user()->name }}!</h4>
    <p data-aos="fade-left" class="text-muted">Anda login sebagai <strong>{{ Auth::user()->role }}</strong>.</p>

    <div class="row text-center mt-4">
        <div class="col-md-4">
            <div class="card shadow-sm border-primary">
                <div class="card-body">
                    <h5 class="card-title">Berita Terbit</h5>
                    <p class="display-4 text-primary">{{$berita}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-warning">
                <div class="card-body">
                    <h5 class="card-title">Total Dokumentasi</h5>
                    <p class="display-4 text-warning">{{$dokumentasi}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-success">
                <div class="card-body">
                    <h5 class="card-title">Guru dan Karyawan</h5>
                    <p class="display-4 text-success">{{$struktur}}</p>
                </div>
            </div>
        </div>
    </div>
    

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

@endsection

