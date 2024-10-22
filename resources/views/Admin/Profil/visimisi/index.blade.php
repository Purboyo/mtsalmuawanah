@extends('layouts.app')

@section('title', 'Edit Visi dan Misi')

@section('content')
<div class="container">
    <a href="{{ route('visimisi.index') }}" class="btn btn-success mb-3">Kembali</a>
    <div class="col-lg-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h5 class="m-0">Edit Visi dan Misi</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('visimisi.update', $visi->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <!-- Edit Visi -->
                    <div class="form-group">
                        <label for="visi" class="form-label">Visi</label>
                        <input type="text" class="form-control" id="visi" name="visi" placeholder="Masukkan Visi" value="{{ $visi->visi }}">
                        @error('visi')
                        <small style="color: red">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Tombol Simpan -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan Perubahan</button>
                        <a href="{{ route('visimisi.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection




                {{-- <!-- Section for Misi -->
                <div class="mb-4 ml-3 align-items-center">
                    <h5 class="text-bold">Misi:</h5>
                    <ul>
                        <li>Menyelenggarakan pendidikan berkualitas yang berlandaskan nilai-nilai keagamaan.</li>
                        <li>Mengembangkan potensi peserta didik dalam bidang akademik, seni, dan olahraga.</li>
                        <li>Mempersiapkan peserta didik untuk berperan aktif dalam kehidupan masyarakat yang dinamis.</li>
                        <li>Mendorong siswa untuk memiliki keterampilan berpikir kritis, kreatif, dan kolaboratif.</li>
                    </ul>
                </div>
            </div> --}}