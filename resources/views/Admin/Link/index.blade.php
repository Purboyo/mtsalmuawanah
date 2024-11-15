@extends('layouts.app')

@section('title', 'Data Link')

@section('content')
<!-- contact -->
@foreach ($Link as $item)
  <div class="container mt-5">
    @if ($message = Session::get('success'))
      <div class="alert alert-success alert-dismissible fade show">
          <strong>Berhasil!</strong>
          <p>{{ $message }}</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>
    @endif

    <div class="row">
      <div class="col-md-3">
        <!-- Facebook Card -->
        <div class="card mb-4 shadow-sm">
          <div class="card-body text-center">
            <i class="fab fa-facebook fa-3x mb-3" style="color: #3b5998;"></i>
            <h5 class="card-title">Facebook</h5>
            <p>Link : {{ $item->facebook }}</p>
            <a href="{{ $item->facebook }}" target="_blank" class="btn btn-primary w-100">Visit</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <!-- Instagram Card -->
        <div class="card mb-4 shadow-sm">
          <div class="card-body text-center">
            <i class="fab fa-instagram fa-3x mb-3" style="color: #E4405F;"></i>
            <h5 class="card-title">Instagram</h5>
            <p>Link : {{ $item->instagram }}</p>
            <a href="{{ $item->instagram }}" target="_blank" class="btn btn-info w-100">Visit</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <!-- YouTube Card -->
        <div class="card mb-4 shadow-sm">
          <div class="card-body text-center">
            <i class="fab fa-youtube fa-3x mb-3" style="color: #FF0000;"></i>
            <h5 class="card-title">YouTube</h5>
            <p>Link : {{ $item->youtube }}</p>
            <a href="{{ $item->youtube }}" target="_blank" class="btn btn-danger w-100">Visit</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <!-- WhatsApp Card -->
        <div class="card mb-4 shadow-sm">
          <div class="card-body text-center">
            <i class="fab fa-whatsapp fa-3x mb-3" style="color: #25D366;"></i>
            <h5 class="card-title">WhatsApp</h5>
            <p>Link : {{ $item->whatsapp }}</p>
            <a href="{{ $item->whatsapp }}" target="_blank" class="btn btn-success w-100">Chat</a>
          </div>
        </div>
      </div>
          <!-- Tombol Edit -->
          <a href="{{ route('Link.edit', $item->id) }}" class="btn btn-warning m-3"><i><i class="fa fa-edit"></i> Edit</a>
    </div>
  </div>
@endforeach
<!-- end contact -->
@endsection
