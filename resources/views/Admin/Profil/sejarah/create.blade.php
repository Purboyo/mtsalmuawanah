@extends('layouts.app')

@section('title', 'Tambah Sejarah')

@section('content')
    

    <div class="container">
        <a href="{{route('sejarah.index')}}" class="btn btn-success mb-3">Kembali</a>
       <div class="row">
        <div class="col-md-12">
            <form action="{{route('sejarah.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Form Input Gambar --}}
                <div class="form-group">
                    <label for="foto">Gambar</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                    @error('foto')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <p>Masukan file dengan format webfig,jpg,jepg!</p>
                </div>
                {{-- Form Input Deskripsi --}}
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea type="text" class="form-control" cols="30" rows="10" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi"></textarea>
                    @error('deskripsi')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
                {{-- Form Input Sejarah Singkat --}}
                <div class="form-group">
                    <label for="sejarahsingkat">Sejarah Singkat</label>
                    <textarea type="text" class="form-control" cols="30" rows="10" id="sejarahsingkat" name="sejarahsingkat" placeholder="Masukkan Deskripsi"></textarea>
                    @error('sejarahsingkat')
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