@extends('SuperAdmin.app')

@section('title', 'Data Akun')

@section('content')
<div class="container mt-3">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show position-relative" style="border-radius: 10px;">
        <strong>Berhasil!</strong>
        <p>{{ $message }}</p>
        <button type="button" class="btn-close position-absolute" data-bs-dismiss="alert" aria-label="Close" style="top: 10px; right: 10px; color: #6c757d; opacity: 0.8; background: none; border: none;">
            <i class="fa fa-times"></i>
        </button>
    </div>
    @endif

    <a href="{{ route('akun.create') }}" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah</a>

    <div class="row">
        @foreach($akun as $index => $user)
        <div class="col-md-4 mb-4">
            <div class="card border">
                <img src="{{ asset($user->image) }}" class="card-img-top" style="width: 100%; height: 255px; object-fit: cover;" alt="{{ $user->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <p class="card-text">Email: {{ $user->email }}</p>
                    <p class="card-text">Role: {{ $user->role }}</p>
                    <p>
                        <span id="password-{{ $index }}" style="display: none">{{ $user->password }}</span>
                        <span id="masked-password-{{ $index }}">••••••••</span>
                        <button class="btn btn-link" onclick="togglePassword({{ $index }})">
                            <i id="eye-icon-{{ $index }}" class="fa fa-eye-slash"></i>
                        </button>
                    </p>

                    @if($user->role !== 'SuperAdmin')
                    <a href="{{ route('akun.edit', $user->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                    <form action="{{ route('akun.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')"><i class="fa fa-trash"></i> Hapus</button>
                    </form>
                    @else
                    <button class="btn btn-warning btn-sm" disabled><i class="fa fa-edit"></i> Edit</button>
                    <button class="btn btn-danger btn-sm" disabled><i class="fa fa-trash"></i> Hapus</button>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script>
    function togglePassword(index) {
        let passwordField = document.getElementById(`password-${index}`);
        let maskedPasswordField = document.getElementById(`masked-password-${index}`);
        let eyeIcon = document.getElementById(`eye-icon-${index}`);

        if (passwordField.style.display === "none") {
            passwordField.style.display = "inline";
            maskedPasswordField.style.display = "none";
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        } else {
            passwordField.style.display = "none";
            maskedPasswordField.style.display = "inline";
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
