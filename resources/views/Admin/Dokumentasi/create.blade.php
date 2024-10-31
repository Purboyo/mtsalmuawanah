@extends('layouts.app')

@section('title', 'Tambah Dokumentasi')

@section('content')
    

    <div class="container">
        <a href="{{route('Dokumentasi.index')}}" class="btn btn-success mb-3">Kembali</a>
       <div class="row">
        <div class="col-md-12">
            <form action="{{route('Dokumentasi.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Form Input Gambar --}}
                <div class="form-group">
                    <label for="title">Gambar</label>
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
                {{--  Filter --}}
                <div class="form-group">
                    <label for="filter_id">Filter</label>
                    <select class="form-control" id="filter_id" name="filter_id">
                        <option value="">Pilih Filter</option>
                        @foreach($filters as $filter)
                            <option value="{{ $filter->id }}" >
                                {{ $filter->filter }}
                            </option>
                        @endforeach
                    </select>
                    @error('filter_id')
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