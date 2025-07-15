@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Formulir Pendaftaran Siswa Baru</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('pendaftaran.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>NISN</label>
            <input type="text" name="nisn" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Alamat Lengkap</label>
            <textarea name="alamat" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label>Nama Orang Tua</label>
            <input type="text" name="nama_ortu" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control" required>
        </div>

        <button class="btn btn-success">Kirim Pendaftaran</button>
    </form>
</div>
@endsection
