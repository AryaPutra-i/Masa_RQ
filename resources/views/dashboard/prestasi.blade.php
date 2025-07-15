@extends('layouts.app')

@section('content_hero')
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="bg-light border-end vh-100" style="width: 240px;">
            <div class="p-3 fw-bold border-bottom">Siswa</div>
            <ul class="nav flex-column p-2">
                <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link">beranda</a></li>
                <li class="nav-item"><a href="#" class="nav-link">program sekolah</a></li>
                <li class="nav-item"><a href="#" class="nav-link">jadwal sekolah</a></li>
                <li class="nav-item"><a href="#" class="nav-link">prestasi</a></li>
            </ul>
        </nav>
        <!-- Konten -->
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="fw-bold">Dashboard Prestasi</h1>
                    <p class="text-muted">Selamat datang di dashboard prestasi siswa!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Prestasi</h5>
                            <a href="{{ route('prestasi_create') }}" class="btn btn-primary mb-3">+ Tambah Guru</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">List Prestasi</h5>
                            <div class="row">
                                @foreach ($prestasi as $item)
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $item->judul }}</h5>
                                            <p class="card-text">{{ $item->deskripsi }}</p>
                                            <p class="card-text">Tanggal : {{ $item->tanggal }}</p>
                                            <a href="{{ route('prestasi_edit', $item->id) }}" class="btn btn-primary mb-3">Edit</a>
                                            <form action="{{ route('prestasi_destroy', $item->id) }}" method="POST" style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger mb-3" style="height: 2.4rem;">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="mt-2">
                                    
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
