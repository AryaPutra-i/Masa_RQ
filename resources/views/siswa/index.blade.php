@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Siswa</h2>
    <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">+ Tambah Siswa</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswas as $siswa)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $siswa->nama }}</td>
                <td>{{ $siswa->nis }}</td>
                <td>{{ $siswa->kelas }}</td>
                <td>{{ $siswa->alamat }}</td>
                <td>
                    <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" class="d-inline"
                          onsubmit="return confirm('Yakin hapus siswa ini?')">
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
