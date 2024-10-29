@extends('SuperAdmin.app')

@section('title', 'Data Akun')

@section('content')
<div class="container mt-5">
    <h2>Manajemen Pengguna</h2>
    <a href="{{ route('akun.create') }}" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah</a>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($akun as $index => $user)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>
                    <img src="{{ asset($user->image) }}" style="width: 81px; height: 81px;" alt="{{ $user->image }}">
                </td>                
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <span id="password-{{ $index }}" style="display: none">{{ $user->password }}</span>
                    <span id="masked-password-{{ $index }}">••••••••</span>
                    <button class="btn btn-link" onclick="togglePassword({{ $index }})">
                        <i id="eye-icon-{{ $index }}" class="fa fa-eye-slash"></i>
                    </button>
                </td>
                <td>{{ $user->role }}</td>
                <td>
                    <a href="{{ route('akun.edit', $user->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                    <form action="{{ route('akun.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')"><i class="fa fa-trash"></i> Hapus</button>
                    </form>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
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
@endsection
