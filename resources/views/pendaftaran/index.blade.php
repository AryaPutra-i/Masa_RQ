@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Pendaftar</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NISN</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Nama Ortu</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($pendaftars as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->nisn }}</td>
                <td>{{ $item->tempat_lahir }}, {{ $item->tanggal_lahir }}</td>
                <td>{{ $item->jenis_kelamin }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->nama_ortu }}</td>
                <td>{{ $item->no_hp }}</td>

            <td>
                <form action="{{ route('pendaftaran.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
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
