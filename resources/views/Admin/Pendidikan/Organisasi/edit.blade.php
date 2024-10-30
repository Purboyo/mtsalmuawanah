@extends('layouts.app')

@section('title', 'Edit Organisasi')

@section('content')
    

    <div class="container">
        <a href="{{ route('Organisasi.index') }}" class="btn btn-success mb-3">Kembali</a>
       <div class="row">
        <div class="col-md-12">
            <form action="{{route('Organisasi.update', $Organisasi->id)}}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                {{-- edit gambar --}}
                <img src="/image/organisasi/{{ $Organisasi->image }}" class="img-fluid" width="250"></imf>
                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" class="form-control" id="image" name="image">
                    @error('image')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <p>Masukan file dengan format webfig,jpg,jepg!</p>
                </div>
                {{-- edit Nama --}}
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="{{ $Organisasi->nama }}">
                    @error('nama')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
                {{-- edit sub_nama --}}
                <div class="form-group">
                    <label for="sub_nama">Singkatan</label>
                    <input type="text" class="form-control" id="sub_nama" name="sub_nama" placeholder="Masukkan Singkatan" value="{{ $Organisasi->sub_nama }}">
                    @error('sub_nama')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>

                {{-- edit konten --}}
                <div class="form-group">
                    <label for="konten">Konten</label>
                    <textarea type="text" class="form-control" id="konten" name="konten" placeholder="Masukkan Konten"  >{{ $Organisasi->konten }}</textarea>
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