@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Data Siswa</h2>

    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" value="{{ $siswa->nama }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>NIS</label>
            <input type="text" name="nis" value="{{ $siswa->nis }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kelas</label>
            <input type="text" name="kelas" value="{{ $siswa->kelas }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required>{{ $siswa->alamat }}</textarea>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
