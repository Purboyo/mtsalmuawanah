@extends('layouts.app')

@section('title', 'Tambah Ekstrakurikuler')

@section('content')
    

    <div class="container">
        <a href="{{route('Ekstrakurikuler.index')}}" class="btn btn-success mb-3">Kembali</a>
       <div class="row">
        <div class="col-md-12">
            <form action="{{route('Ekstrakurikuler.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Form Input Gambar --}}
                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" class="form-control" id="image" name="image">
                    @error('image')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <p>Masukan file dengan format webfig,jpg,jepg!</p>
                </div>
                {{-- Form Input Nama --}}
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                    @error('nama')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
                {{-- Form Input sub_nama --}}
                <div class="form-group">
                    <label for="sub_nama">Singkatan</label>
                    <input type="text" class="form-control" id="sub_nama" name="sub_nama" placeholder="Masukkan Singkatan">
                    @error('sub_nama')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
                {{-- Form Input konten --}}
                <div class="form-group">
                    <label for="konten">Deskripsi</label>
                    <textarea type="text" class="form-control" cols="30" rows="10" id="konten" name="konten" placeholder="Masukkan Deskripsi"></textarea>
                    @error('konten')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                </div>
            </form>
        </div>
       </div>
    </div>

@endsection