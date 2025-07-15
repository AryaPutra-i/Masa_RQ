@extends('layouts.app')

@section('content_hero')
    <!-- Hero Section -->
    <section class="position-relative text-white"
        style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 119, 128, 0.6)), url({{ asset('images/school.jpg') }}) center/cover no-repeat; min-height: 100vh;">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center"
            style="min-height: 100vh;">
            <h1 class="fw-bold display-4">PPDB ONLINE Ma Sains Roundlotul Quran Lamongan 2025-2026</h1>
            <p class="mt-3 fs-5">PPDB Online Ma Sains Roundlotul Quran Lamongan Tahun Pelajaran 2025-2026 telah
                dibuka.<br>Daftarkan Diri Anda Sekarang Juga!!!</p>
            <div class="mt-4">
                <a href="#" class="btn btn-warning btn-lg me-3">Daftar Sekarang</a>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-outline-light btn-lg">Panduan PPDB</a>
            </div>
        </div>
    </section>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Coming Soon</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Coming Soon 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('content')
    <!-- Info Cards Section -->
    <section class="py-5" style="margin-top: -120px; position: relative; z-index: 1;">
        <div class="row justify-content-center g-4 text-center">
            <!-- Akreditasi -->
            <div class="col-md-4">
                <div class="p-4 bg-white shadow rounded h-100">
                    <div class="mb-3 text-warning" style="font-size: 2rem;">
                        <i class="bi bi-journal-check"></i>
                    </div>
                    <h5 class="fw-bold">AKREDITASI</h5>
                    <p class="mt-2">Ma Sains Roundlotul Quran Lamongan telah Terakreditasi oleh BAN-SM dengan nilai Akreditasi "B"
                    </p>
                </div>
            </div>

            <!-- Program -->
            <div class="col-md-4">
                <div class="p-4 bg-white shadow rounded h-100">
                    <div class="mb-3 text-warning" style="font-size: 2rem;">
                        <i class="bi bi-mortarboard-fill"></i>
                    </div>
                    <h5 class="fw-bold">PROGRAM</h5>
                    <p class="mt-2">Program Pendidikan Unggul Berbasis IPTEK & IMTAQ.</p>
                </div>
            </div>

            <!-- Guru -->
            <div class="col-md-4">
                <div class="p-4 bg-white shadow rounded h-100">
                    <div class="mb-3 text-warning" style="font-size: 2rem;">
                        <i class="bi bi-person-video2"></i>
                    </div>
                    <h5 class="fw-bold">GURU</h5>
                    <p class="mt-2">Guru Berdedikasi Tinggi dan Berpengalaman.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-3" style="width: 750px;">
        <h1 class="text-center">SELAMAT DATANG</h1>
        <p class="text-center" style="font-size: 1.2rem;">Selamat Datang di Website PPDB Online Ma Sains Roundlotul Quran Lamongan. Ma Sains Roundlotul Quran Lamongan adalah salah satu Madrasah jenjang Akhir di Lamongan.</p>
    </div>
    
    <div class="container" style="width: 750px; margin-top: 5rem;">
        <h2 class="text-center">Raih Masa depan Melalui Pendidikan</h2>
        <p class="text-center" style="font-size: 1.1rem;">Mewujudkan Pelajar Muslim, Cendekia, dan Pemimpin.</p>
    </div>

    <!-- Section Kepala Madrasah & Info Accordion -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center">
            <!-- Kolom Gambar -->
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/foto-kepala-sekolah.png') }}" alt="Kepala Madrasah" class="img-fluid" style="max-height: 500px;">
            </div>

            <!-- Kolom Accordion -->
            <div class="col-md-6">
                <div class="accordion shadow rounded" id="accordionInfo">
                    <!-- Akreditasi -->
                    <div class="accordion-item py-3">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" style="font-size: 1.2rem; font-family: Arial, sans-serif;">
                                Akreditasi
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionInfo" >
                            <div class="accordion-body">
                                Ma Sains Roundlotul Quran Lamongan telah Terakreditasi oleh BAN-SM dengan nilai Akreditasi "B".
                            </div>
                        </div>
                    </div>

                    <!-- Program -->
                    <div class="accordion-item py-3">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" style="font-size: 1.2rem; font-family: Arial, sans-serif;">
                                Program Pendidikan berbasis IPTEK & IMTAQ
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionInfo">
                            <div class="accordion-body">
                                Kami menerapkan pendidikan berbasis teknologi dan keimanan untuk mencetak generasi unggul.
                            </div>
                        </div>
                    </div>

                    <!-- Guru -->
                    <div class="accordion-item py-3">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" style="font-size: 1.2rem; font-family: Arial, sans-serif;">
                                Guru
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionInfo">
                            <div class="accordion-body">
                                Didukung oleh guru-guru berpengalaman dan berdedikasi tinggi dalam dunia pendidikan.
                            </div>
                        </div>
                    </div>
                </div> <!-- End Accordion -->
            </div>
        </div>
    </div>
</section>

@endsection
