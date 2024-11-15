@extends('layouts.app')

@section('title', 'Edit Data Kontak')

@section('content')
<!-- Edit Kontak -->
<div class="container mt-5">
  @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <strong>Berhasil!</strong>
        <p>{{ $message }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  @endif

  <div class="row">
    <div class="col-md-12">
      <div class="card shadow-sm">
        <div class="card-body">
          <h3 class="mb-4">Edit Data Link</h3>
          <!-- Form untuk edit kontak -->
          <form action="{{ route('Link.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="facebook" class="form-label">Facebook Link</label>
              <input type="url" class="form-control" id="facebook" name="facebook" value="{{ $item->facebook }}" required>
            </div>

            <div class="mb-3">
              <label for="instagram" class="form-label">Instagram Link</label>
              <input type="url" class="form-control" id="instagram" name="instagram" value="{{ $item->instagram }}" required>
            </div>

            <div class="mb-3">
              <label for="youtube" class="form-label">YouTube Link</label>
              <input type="url" class="form-control" id="youtube" name="youtube" value="{{ $item->youtube }}" required>
            </div>

            <div class="mb-3">
              <label for="whatsapp" class="form-label">WhatsApp Link</label>
              <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="{{ $item->whatsapp }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('Link.index') }}" class="btn btn-secondary ms-3">Kembali</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end Edit Kontak -->
@endsection
