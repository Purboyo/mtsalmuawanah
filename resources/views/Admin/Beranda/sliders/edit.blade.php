@extends('layouts.app')

@section('title', 'Edit Slider')

@section('content')
    

    <div class="container">
        <a href="{{ route('sliders.index') }}" class="btn btn-success mb-3">Kembali</a>
       <div class="row">
        <div class="col-md-12">
            <form action="{{route('sliders.update', $slider->id)}}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                {{-- edit judul --}}
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul" value="{{ $slider->title }}">
                    @error('title')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>

                {{-- edit deskripsi --}}
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea class="form-control" cols="30" rows="10" id="description" name="description" placeholder="Masukkan Deskripsi" >{{ $slider->description }}</textarea>
                    @error('description')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>

                {{-- edit gambar --}}
                <img src="/image/slider/{{ $slider->image }}" class="img-fluid"></imf>
                <div class="form-group">
                    <label for="title">Gambar</label>
                    <input type="file" class="form-control" id="image" name="image">
                    @error('image')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <p>Masukan file dengan format webfig,jpg,jepg!</p>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                </div>
            </form>
        </div>
       </div>
    </div>

@endsection