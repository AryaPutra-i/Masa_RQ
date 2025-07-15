@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('prestasi_store') }}" style="height: 500px; width: 50rem; margin: 0 auto;" class="mt-5">
    <h2>Tambah Prestasi</h1>
    @csrf
    <div class="form-group" >
        <label for="judul">Judul</label>
        <input type="text" id="judul" name="judul" class="form-control mt-2">
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea id="deskripsi" name="deskripsi" class="form-control mt-2"></textarea>
    </div>
    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <input type="date" id="tanggal" name="tanggal" class="form-control mt-2">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
</form>
@endsection