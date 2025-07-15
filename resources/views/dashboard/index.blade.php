@extends('layouts.app')

@section('content_hero')
<div class="d-flex">
    <!-- Sidebar -->
    <nav class="bg-light border-end vh-100" style="width: 240px;">
        <div class="p-3 fw-bold border-bottom" >Siswa</div>
        <ul class="nav flex-column p-2">
            <li class="nav-item" ><a href="{{ route('dashboard') }}" class="nav-link" >beranda</a></li>
            <li class="nav-item" ><a href="#" class="nav-link" >program sekolah</a></li>
            <li class="nav-item" ><a href="#" class="nav-link" >jadwal sekolah</a></li>
            <li class="nav-item" ><a href="{{ url('/dashboard/prestasi') }}" class="nav-link" >prestasi</a></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <div class="flex-grow-1 p-4">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">Dashboard <small class="text-muted">Siswa</small></h4>
            <div class="text-end" style="background-color: #004488; border-radius: 5px; height: 45px;">
                <span class="fw-semibold text-light text-uppercase m-3">{{ Auth::user()->name }}</span>
                <i class="bi bi-person-circle fs-4 ms-2"></i>
            </div>
        </div>

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>

        <!-- Card Grid -->
        <div class="row g-4 mt-2">
            <!-- IPK -->
            <div class="col-md-4" >
                <div class="p-3 text-white rounded shadow-sm" style="height: 150px; background-color: #004488" >
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-1" style="font-size: 2rem;">Program</h6>
                        </div>
                        <i class="bi bi-bar-chart fs-1"></i>
                    </div class="mt-5">
                    <a href="#" class="text-white text-decoration-underline small ">SELENGKAPNYA</a>
                </div>
            </div>

            <!-- Jadwal -->
            <div class="col-md-4">
                <div class="p-3 text-white rounded shadow-sm" style="height: 150px; background-color: #00811c;">
                    <h6 style="font-size: 2rem;">Jadwal Sekolah</h6>
                    <p class="mb-1">Genap 2024/2025</p>
                    <a href="#" class="text-white small">Selengkapnya</a>
                </div>
            </div>

            <!-- Peraturan -->
            <div class="col-md-4">
                <div class="p-3 text-white bg-purple rounded shadow-sm" style="background-color: #7150ad; height: 150px;">
                    <h6 style="font-size: 2rem;">prestasi</h6>
                    <p class="mb-1">Versi 3</p>
                    <a href="#" class="text-white small">Selengkapnya</a>
                </div>
            </div>

            
        </div>
    </div>
</div>
@endsection
