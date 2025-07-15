@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Guru</h2>
    <a href="{{ route('guru.create') }}" class="btn btn-primary mb-3">+ Tambah Guru</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Mata Pelajaran</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gurus as $guru)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $guru->nama }}</td>
                <td>{{ $guru->nip }}</td>
                <td>{{ $guru->mapel }}</td>
                <td>{{ $guru->alamat }}</td>
                <td>
                    <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('guru.destroy', $guru->id) }}" method="POST" class="d-inline"
                        onsubmit="return confirm('Yakin hapus guru ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
