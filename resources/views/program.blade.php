@extends('layouts.app')

@section('content')
    <style>
        .section-title {
            font-size: 28px;
            /* Sedikit lebih besar */
            color: #1a3a5f;
            margin-bottom: 30px;
            font-weight: bold;
            text-align: center;
            /* Unruk pusatkan judul */
            padding-bottom: 10px;
            border-bottom: 2px solid #4a9678;
            /* Garis bawah dekoratif */
            display: inline-block;
            /* Agar border-bottom sesuai lebar teks */
            position: relative;
            left: 50%;
            transform: translateX(-50%);
        }


        /* Activities grid - Bootstrap menangani kolom, kita atur kartu */
        /* .activities-grid { */
        /* Dihapus karena Bootstrap's .row .g-4 menangani ini */
        /* } */

        .activity-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            /* Shadow lebih halus */
            padding: 25px;
            display: flex;
            flex-direction: column;
            align-items: center;
            /* Memusatkan item */
            text-align: center;
            /* Memusatkan teks */
            height: 100%;
            /* Memastikan semua kartu sama tinggi dalam satu baris */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            /* Menambahkan cursor pointer */
            border: 1px solid #eee;
            /* Border tipis */
        }

        .activity-card:hover {
            transform: translateY(-5px);
            /* Efek angkat saat hover */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .activity-logo {
            /* Gaya untuk gambar logo */
            max-width: 80px;
            /* Batasi lebar logo */
            height: 80px;
            /* Tetapkan tinggi yang sama */
            object-fit: contain;
            /* Pastikan logo tidak terdistorsi */
            margin-bottom: 15px;
            color: #1a3a5f;
            /* Jika ada fallback text/ikon */
        }

        .activity-title {
            font-size: 20px;
            font-weight: 600;
            /* Sedikit lebih tebal */
            color: #1a3a5f;
            margin-bottom: 10px;
        }

        .activity-description {
            font-size: 15px;
            /* Sedikit lebih besar */
            color: #555;
            margin-bottom: 15px;
            line-height: 1.6;
            flex-grow: 1;
            /* Agar deskripsi mengisi ruang tersisa */
        }


        /* Achievements section - */
        .achievements-section {
            margin-bottom: 40px;
            padding: 30px;
            background-color: #ffffff;
            /* Latar belakang putih untuk bagian prestasi */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }

        .achievements-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            flex-wrap: wrap;
            /* Responsif */
        }

        /*  .section-title jika digunakan di dalam .achievements-header */
        .achievements-header .section-title {
            margin-bottom: 15px;
            text-align: left;
            /* Meratakan kiri jika di header */
            border: none;
            /* Menghapus border jika tidak diinginkan di sini */
            transform: none;
            /* Menghapus transform */
            left: 0;
            display: block;
            /* Kembali ke block */
        }

        .filter-tabs {
            display: flex;
            flex-wrap: wrap;
            /* Agar tab bisa turun jika tidak muat */
            gap: 5px;
            /* Jarak antar tab */
        }

        .filter-tab {
            background-color: #e9ecef;
            /* Warna dasar tab */
            border: none;
            padding: 8px 15px;
            margin-left: 5px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 14px;
            color: #1a3a5f;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .filter-tab:hover {
            background-color: #d1d9e0;
        }

        .filter-tab.active {
            background-color: #4a9678;
            color: white;
            font-weight: 600;
        }

        /* Stats cards - Bootstrap menangani grid, kita atur kartu */
        .stats-cards {
            /* Dihapus karena Bootstrap's .row .g-3 menangani ini */
            /* margin-bottom: 30px; */
        }

        .stat-card {
            background-color: #f8f9fa;
            /* Warna latar sedikit beda */
            border-radius: 10px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            /* Memusatkan konten vertikal */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            border: 1px solid #eee;
            height: 100%;
            /* Menyamakan tinggi kartu */
            text-align: center;
        }

        .stat-icon {
            font-size: 28px;
            /* Memperbesar ikon */
            color: #4a9678;
            /* Gunakan warna aksen */
            margin-bottom: 10px;
        }

        .stat-number {
            font-size: 32px;
            /* angka */
            font-weight: bold;
            color: #1a3a5f;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 14px;
            color: #777;
        }

        /* Achievements grid - Bootstrap menangani kolom */
        .achievements-grid {
            /* Dihapus karena Bootstrap's .row .g-4 menangani ini */
        }

        /* Styling untuk gambar prestasi */
        .foto-prestasi {
            width: 100%;
            /* Lebar 100% dari container */
            height: 400px;
            /* Tinggi tetap */
            object-fit: cover;
            /* Metode penyesuaian gambar */
            border-radius: 6px;
            /* Sudut melengkung */
            margin: 10px 10px;
            /* Margin atas dan bawah */
            display: block;
            /* Blok display */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            /* Bayangan halus */
        }

        .achievement-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            padding: 20px;
            border: 1px solid #eee;
            height: 100%;
            /* Menyamakan tinggi kartu */
            min-height: 400px;
            display: flex;
            /* flexbox untuk layout internal */
            flex-direction: column;
        }

        .achievement-title {
            font-size: 18px;
            font-weight: 600;
            /* Sedikit tebal */
            color: #1a3a5f;
            margin-bottom: 10px;
        }

        .achievement-category {
            display: inline-block;
            background-color: #4a9678;
            color: white;
            padding: 4px 12px;
            border-radius: 15px;
            font-size: 12px;
            margin-bottom: 15px;
            align-self: flex-start;
            /* Ratakan kiri */
        }

        .achievement-description {
            font-size: 14px;
            color: #555;
            margin-bottom: 10px;
            min-height: 60px;
            line-height: 1.5;
            flex-grow: 0;
            /* Agar deskripsi mengisi ruang */
        }

        .achievement-meta {
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            color: #777;
            margin-top: auto;
            /* Dorong meta ke bawah */
            padding-top: 10px;
            border-top: 1px solid #eee;
            /* Garis pemisah */
            flex-wrap: wrap;
            /* Agar meta bisa wrap */
            gap: 10px;
        }

        .meta-item {
            display: flex;
            align-items: center;
        }

        .meta-icon {
            margin-right: 5px;
            color: #4a9678;
            /* Warna ikon meta */
        }
    </style>

    <h2 class="section-title">Aktivitas Ekstrakurikuler</h2>
    <div class="row g-4 activities-grid"> <!-- Grid Bootstrap -->

        <!-- Activity 1: Pramuka -->
        <div class="col-md-6 col-lg-4">
            <div class="activity-card" data-bs-toggle="modal" data-bs-target="#programModal" data-program-title="Pramuka"
                data-program-logo="{{ asset('images/logopramuka.png') }}"
                data-program-description="Kegiatan kepanduan yang melatih kedisiplinan, keterampilan bertahan hidup, kerjasama tim, dan kepemimpinan. 
             Belajar tali-temali, PBB, sandi, dan kegiatan alam."
                data-program-registration="Hubungi Pembina Pramuka: Bapak/Ibu di ruang OSIS atau email: pramuka@masainsrq.sch.id">
                <!-- Konten yang terlihat di kartu -->
                <img src="{{ asset('images/logopramuka.png') }}" alt="Pramuka Logo" class="activity-logo">
                <h3 class="activity-title">Pramuka</h3>
                <p class="activity-description">Melatih kedisiplinan, kerjasama, dan keterampilan kepanduan.</p>
            </div>
        </div>

        <!-- Activity 2: Paduan Suara (FIXED STRUCTURE) -->
        <div class="col-md-6 col-lg-4">
            <div class="activity-card" data-bs-toggle="modal" data-bs-target="#programModal"
                data-program-title="Paduan Suara" data-program-logo="{{ asset('images/paduansuara.png') }}"
                data-program-description="Mengembangkan bakat vokal, belajar teknik bernyanyi dalam harmoni, membaca notasi musik, dan tampil dalam acara sekolah maupun kompetisi."
                data-program-registration="Pendaftaran akan diinformasikan pembukaan dan bisa didaftar lewat website jika sudah dibuka.">
                <!-- Konten yang terlihat di kartu -->
                <img src="{{ asset('images/paduansuara.png') }}" alt="Paduan Suara Logo" class="activity-logo">
                <h3 class="activity-title">Paduan Suara</h3>
                <p class="activity-description">Mengembangkan bakat vokal dan harmoni dalam kelompok.</p>
            </div>
        </div>

        <!-- Activity 3: Elektro -->
        <div class="col-md-6 col-lg-4">
            <div class="activity-card" data-bs-toggle="modal" data-bs-target="#programModal" data-program-title="Elektro"
                data-program-logo="{{ asset('images/elektro.png') }}"
                data-program-description="Mempelajari dasar-dasar elektronika, merakit sirkuit sederhana, troubleshooting, dan eksplorasi teknologi kelistrikan dasar."
                data-program-registration="Temui Bapak [Nama Pembina Elektro] di Laboratorium Fisika setiap hari Selasa pukul 15:00.">
                <!-- Konten yang terlihat di kartu -->
                <img src="{{ asset('images/elektro.png') }}" alt="Elektro Logo" class="activity-logo">
                <h3 class="activity-title">Elektro</h3>
                <p class="activity-description">Belajar dasar-dasar elektronika dan merakit sirkuit.</p>
            </div>
        </div>

        <!-- Activity 4: Palang Merah Remaja (PMR) -->
        <div class="col-md-6 col-lg-4">
            <div class="activity-card" data-bs-toggle="modal" data-bs-target="#programModal"
                data-program-title="Palang Merah Remaja (PMR)" data-program-logo="{{ asset('images/PMRlogo.png') }}"
                data-program-description="Belajar prinsip-prinsip dasar pertolongan pertama, kesehatan remaja, donor darah sukarela, dan kegiatan kemanusiaan lainnya dibawah naungan Palang Merah Indonesia."
                data-program-registration="Pendaftaran dibuka di stand PMR saat MPLS atau hubungi Pembina PMR di Ruang UKS.">
                <!-- Konten yang terlihat di kartu -->
                <img src="{{ asset('images/PMRlogo.png') }}" alt="PMR Logo" class="activity-logo">
                <h3 class="activity-title">Palang Merah Remaja</h3>
                <p class="activity-description">Belajar pertolongan pertama dan kegiatan kemanusiaan.</p>
            </div>
        </div>

        <!-- Activity 5: Kelompok Ilmiah Remaja (KIR) -->
        <div class="col-md-6 col-lg-4">
            <div class="activity-card" data-bs-toggle="modal" data-bs-target="#programModal"
                data-program-title="Kelompok Ilmiah Remaja (KIR)" data-program-logo="{{ asset('images/kirLogo.png') }}"
                data-program-description="Wadah bagi siswa yang berminat dalam penelitian ilmiah, belajar metode penelitian, penulisan karya ilmiah, dan mengikuti kompetisi sains."
                data-program-registration="Datang ke pertemuan rutin setiap hari Jumat pukul 14:30 di Ruang Lab IPA atau hubungi Koordinator KIR.">
                <!-- Konten yang terlihat di kartu -->
                <img src="{{ asset('images/kirLogo.png') }}" alt="KIR Logo" class="activity-logo">
                <h3 class="activity-title">KIR</h3>
                <p class="activity-description">Mengembangkan minat dan bakat dalam penelitian ilmiah.</p>
            </div>
        </div>

        <!-- Activity 6: Banjari  -->
        <div class="col-md-6 col-lg-4">
            <div class="activity-card" data-bs-toggle="modal" data-bs-target="#programModal" data-program-title="Banjari"
                data-program-logo="{{ asset('images/banjari.png') }}"
                data-program-description="Seni musik Islami menggunakan rebana (terbang) untuk mengiringi shalawat dan lagu-lagu pujian. Melatih kekompakan irama dan vokal."
                data-program-registration="Latihan setiap Sabtu sore di Aula Masjid Sekolah. Hubungi Fahmi untuk info lebih lanjut.">
                <!-- Konten yang terlihat di kartu -->
                <img src="{{ asset('images/banjari.png') }}" alt="Banjari Logo" class="activity-logo">
                <h3 class="activity-title">Banjari</h3>
                <p class="activity-description">Seni musik Islami dengan rebana dan shalawat.</p>
            </div>
        </div>

        <!-- Activity 7: Robotika  -->
        <div class="col-md-6 col-lg-4">
            <div class="activity-card" data-bs-toggle="modal" data-bs-target="#programModal" data-program-title="Robotika"
                data-program-logo="{{ asset('images/robotics.png') }}"
                data-program-description="Merancang, membangun, dan memprogram robot. Mengasah logika pemrograman, pemecahan masalah, dan persiapan mengikuti kompetisi robotika."
                data-program-registration="Pendaftaran dan seleksi akan diumumkan di mading sekolah. Tempat latihan di Lab Komputer.">
                <!-- Konten yang terlihat di kartu -->
                <img src="{{ asset('images/robotics.png') }}" alt="Robotika Logo" class="activity-logo">
                <h3 class="activity-title">Robotika</h3>
                <p class="activity-description">Merancang, membangun, dan memprogram robot.</p>
            </div>
        </div>

        <!-- Activity 8: Futsal -->
        <div class="col-md-6 col-lg-4">
            <div class="activity-card" data-bs-toggle="modal" data-bs-target="#programModal" data-program-title="Futsal"
                data-program-logo="{{ asset('images/futsal.png') }}"
                data-program-description="Mengembangkan kemampuan bermain futsal, melatih fisik, teknik dasar (dribbling, passing, shooting), strategi permainan, dan partisipasi dalam turnamen."
                data-program-registration="Seleksi pemain diadakan setiap awal semester. Jadwal latihan di Lapangan Futsal Sekolah. Info: Fahmi.">
                <!-- Konten yang terlihat di kartu -->
                <img src="{{ asset('images/futsal.png') }}" alt="Futsal Logo" class="activity-logo">
                <h3 class="activity-title">Futsal</h3>
                <p class="activity-description">Mengasah kemampuan bermain futsal dan kerjasama tim.</p>
            </div>
        </div>

        <!-- Activity 9: Keputrian -->
        <div class="col-md-6 col-lg-4">
            <div class="activity-card" data-bs-toggle="modal" data-bs-target="#programModal"
                data-program-title="Keputrian" data-program-logo="{{ asset('images/keputrian.png') }}"
                data-program-description="Kegiatan khusus siswi untuk pendalaman ilmu agama (fiqh wanita), diskusi, keterampilan (memasak, menjahit), dan pengembangan diri dalam perspektif Islam."
                data-program-registration="Kegiatan rutin setiap hari Jumat siang di Aula Putri. Semua siswi otomatis terdaftar.">
                <!-- Konten yang terlihat di kartu -->
                <img src="{{ asset('images/keputrian.png') }}" alt="Keputrian Logo" class="activity-logo">
                <h3 class="activity-title">Keputrian</h3>
                <p class="activity-description">Kegiatan pendalaman agama dan keterampilan khusus siswi.</p>
            </div>
        </div>

    </div> <!-- Tutup .row .activities-grid -->

    <!-- Achievements Section (Tetap sama seperti sebelumnya) -->
    <div class="achievements-section mt-5">
        <div class="achievements-header">
            <h2 class="section-title">Prestasi</h2>
            <div class="filter-tabs">
                <button class="filter-tab active" data-filter="all">All</button>
                <button class="filter-tab" data-filter="academic">Academic</button>
                <button class="filter-tab" data-filter="organisasi">Kepemimpinan & Organisasi</button>
                <button class="filter-tab" data-filter="sports">Sports</button>
                <button class="filter-tab" data-filter="arts">Arts</button>
                <button class="filter-tab" data-filter="science">Science</button>
                <button class="filter-tab" data-filter="religious">Religious</button>
            </div>
        </div>

        <div class="row g-3 stats-cards mb-4">
            <div class="col-sm-6 col-md-3">
                <div class="stat-card">
                    <div class="stat-icon">🏆</div>
                    <div class="stat-number">130</div>
                    <div class="stat-label">Total Penghargaan</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="stat-card">
                    <div class="stat-icon">🥇</div>
                    <div class="stat-number">20</div>
                    <div class="stat-label">Juara Pertama</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="stat-card">
                    <div class="stat-icon">👥</div>
                    <div class="stat-number">100</div>
                    <div class="stat-label">Peserta Lomba</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="stat-card">
                    <div class="stat-icon">⭐</div>
                    <div class="stat-number">50</div>
                    <div class="stat-label">Kompetisi</div>
                </div>
            </div>
        </div>

        {{-- card prestasi kategori all --}}
        <div id="all">
            <div class="row g-4 achievements-grid">
                <div class="col-md-6 col-lg-4 achievement-card" data-category="academic">
                    <h3 class="achievement-title">Masuk PTN Jalur SNBP</h3>
                    <span class="achievement-category">Academic</span>
                    <p class="achievement-description">Siswa MA Sains Roudlotul Qur'an yang telah lulus tes masuk PTN Jalur
                        SNBP pada pengumuman tanggal
                        18 Maret 2025</p>
                    <img class="foto-prestasi" src="{{ asset('images/snbpprestasi.jpg') }}" alt="Deskripsi Prestasi">
                    <div class="achievement-meta">
                        <div class="meta-item"><span class="meta-icon">📅</span><span>March 15, 2025</span></div>
                        <div class="meta-item"><span class="meta-icon">📍</span><span>Seleksi Nasional Berdasarkan
                                Prestasi</span></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 achievement-card" data-category="academic">
                    <h3 class="achievement-title">Perlombaan Tingkat Nasional</h3>
                    <span class="achievement-category">Academic</span>
                    <p class="achievement-description">Juara dalam berbagai perlombaan tingkat Nasional</p>
                    <img class="foto-prestasi" src="{{ asset('images/prestasi2.png') }}" alt="Deskripsi Prestasi">
                    <div class="achievement-meta">
                        <div class="meta-item"><span class="meta-icon">📅</span><span>January 21, 2025</span></div>
                        <div class="meta-item"><span class="meta-icon">📍</span><span>MA Sains Roudlotul Qur'an</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 achievement-card" data-category="arts">
                    <h3 class="achievement-title">Juara 2 Lomba PBB Kreasi</h3>
                    <span class="achievement-category">Kepemimpinan & Organisasi</span>
                    <p class="achievement-description">Juara 2 Lomba PBB Kreasi DIMIUPALA 2025 UNISLA</p>
                    <img class="foto-prestasi" src="{{ asset('images/LOMBA PBB.jpg') }}" alt="Deskripsi Prestasi">
                    <div class="achievement-meta">
                        <div class="meta-item"><span class="meta-icon">📅</span><span>Juni 13, 2025</span></div>
                        <div class="meta-item"><span class="meta-icon">📍</span><span>MA Sains Roudlotul Qur'an</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kartu prestasi academic-->
        <div id="academic">
            <div class="row g-4 achievements-grid">
                <div class="col-md-6 col-lg-4 achievement-card" data-category="academic">
                    <h3 class="achievement-title">Masuk PTN Jalur SNBP</h3>
                    <span class="achievement-category">Academic</span>
                    <p class="achievement-description">Siswa MA Sains Roudlotul Qur'an yang telah lulus tes masuk PTN
                        Jalur
                        SNBP pada pengumuman tanggal
                        18 Maret 2025</p>
                    <img class="foto-prestasi" src="{{ asset('images/snbpprestasi.jpg') }}" alt="Deskripsi Prestasi">
                    <div class="achievement-meta">
                        <div class="meta-item"><span class="meta-icon">📅</span><span>March 15, 2025</span></div>
                        <div class="meta-item"><span class="meta-icon">📍</span><span>Seleksi Nasional Berdasarkan
                                Prestasi</span></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 achievement-card" data-category="academic">
                    <h3 class="achievement-title">Perlombaan Tingkat Nasional</h3>
                    <span class="achievement-category">Academic</span>
                    <p class="achievement-description">Juara dalam berbagai perlombaan tingkat Nasional</p>
                    <img class="foto-prestasi" src="{{ asset('images/prestasi2.png') }}" alt="Deskripsi Prestasi">
                    <div class="achievement-meta">
                        <div class="meta-item"><span class="meta-icon">📅</span><span>January 21, 2025</span></div>
                        <div class="meta-item"><span class="meta-icon">📍</span><span>MA Sains Roudlotul Qur'an</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 achievement-card" data-category="arts">
                    <h3 class="achievement-title">COMING SOON</h3>
                    <span class="achievement-category">Academic</span>
                    <p class="achievement-description">COMING SOON</p>
                    <img class="foto-prestasi" src="{{ asset('images/coming-soon.png') }}" alt="Deskripsi Prestasi">
                    <div class="achievement-meta">
                        <div class="meta-item"><span class="meta-icon">📅</span><span>Coming Soon</span></div>
                        <div class="meta-item"><span class="meta-icon">📍</span><span>Coming Soon</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kartu prestasi kepemimpinan&organisasi-->
        <div id="organisasi">
            <div class="row g-4 achievements-grid">
                <div class="col-md-6 col-lg-4 achievement-card" data-category="academic">
                    <h3 class="achievement-title">COMING SOON</h3>
                    <span class="achievement-category">kepemimpinan&organisasi</span>
                    <p class="achievement-description">COMING SOON</p>
                    <img class="foto-prestasi" src="{{ asset('images/coming-soon.png') }}" alt="Deskripsi Prestasi">
                    <div class="achievement-meta">
                        <div class="meta-item"><span class="meta-icon">📅</span><span>COMING SOON</span></div>
                        <div class="meta-item"><span class="meta-icon">📍</span><span>COMING SOON</span></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 achievement-card" data-category="academic">
                    <h3 class="achievement-title">COMING SOON</h3>
                    <span class="achievement-category">kepemimpinan&organisasi</span>
                    <p class="achievement-description">COMING SOON</p>
                    <img class="foto-prestasi" src="{{ asset('images/coming-soon.png') }}" alt="Deskripsi Prestasi">
                    <div class="achievement-meta">
                        <div class="meta-item"><span class="meta-icon">📅</span><span>COMING SOON</span></div>
                        <div class="meta-item"><span class="meta-icon">📍</span><span>COMING SOON</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 achievement-card" data-category="arts">
                    <h3 class="achievement-title">COMING SOON</h3>
                    <span class="achievement-category">kepemimpinan&organisasi</span>
                    <p class="achievement-description">COMING SOON</p>
                    <img class="foto-prestasi" src="{{ asset('images/coming-soon.png') }}" alt="Deskripsi Prestasi">
                    <div class="achievement-meta">
                        <div class="meta-item"><span class="meta-icon">📅</span><span>Coming Soon</span></div>
                        <div class="meta-item"><span class="meta-icon">📍</span><span>Coming Soon</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kartu prestasi sports-->
        <div id="sports">
            <div class="row g-4 achievements-grid">
                <div class="col-md-6 col-lg-4 achievement-card" data-category="academic">
                    <h3 class="achievement-title">COMING SOON</h3>
                    <span class="achievement-category">sports</span>
                    <p class="achievement-description">COMING SOON</p>
                    <img class="foto-prestasi" src="{{ asset('images/coming-soon.png') }}" alt="Deskripsi Prestasi">
                    <div class="achievement-meta">
                        <div class="meta-item"><span class="meta-icon">📅</span><span>COMING SOON</span></div>
                        <div class="meta-item"><span class="meta-icon">📍</span><span>COMING SOON</span></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 achievement-card" data-category="academic">
                    <h3 class="achievement-title">COMING SOON</h3>
                    <span class="achievement-category">sports</span>
                    <p class="achievement-description">COMING SOON</p>
                    <img class="foto-prestasi" src="{{ asset('images/coming-soon.png') }}" alt="Deskripsi Prestasi">
                    <div class="achievement-meta">
                        <div class="meta-item"><span class="meta-icon">📅</span><span>COMING SOON</span></div>
                        <div class="meta-item"><span class="meta-icon">📍</span><span>COMING SOON</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 achievement-card" data-category="arts">
                    <h3 class="achievement-title">COMING SOON</h3>
                    <span class="achievement-category">sports</span>
                    <p class="achievement-description">COMING SOON</p>
                    <img class="foto-prestasi" src="{{ asset('images/coming-soon.png') }}" alt="Deskripsi Prestasi">
                    <div class="achievement-meta">
                        <div class="meta-item"><span class="meta-icon">📅</span><span>Coming Soon</span></div>
                        <div class="meta-item"><span class="meta-icon">📍</span><span>Coming Soon</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kartu prestasi arts-->
        <div id="arts">
            <div class="row g-4 achievements-grid">
                <div class="col-md-6 col-lg-4 achievement-card" data-category="academic">
                    <h3 class="achievement-title">COMING SOON</h3>
                    <span class="achievement-category">Ar</span>
                    <p class="achievement-description">COMING SOON</p>
                    <img class="foto-prestasi" src="{{ asset('images/coming-soon.png') }}" alt="Deskripsi Prestasi">
                    <div class="achievement-meta">
                        <div class="meta-item"><span class="meta-icon">📅</span><span>COMING SOON</span></div>
                        <div class="meta-item"><span class="meta-icon">📍</span><span>COMING SOON</span></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 achievement-card" data-category="academic">
                    <h3 class="achievement-title">COMING SOON</h3>
                    <span class="achievement-category">Ar</span>
                    <p class="achievement-description">COMING SOON</p>
                    <img class="foto-prestasi" src="{{ asset('images/coming-soon.png') }}" alt="Deskripsi Prestasi">
                    <div class="achievement-meta">
                        <div class="meta-item"><span class="meta-icon">📅</span><span>COMING SOON</span></div>
                        <div class="meta-item"><span class="meta-icon">📍</span><span>COMING SOON</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 achievement-card" data-category="arts">
                    <h3 class="achievement-title">COMING SOON</h3>
                    <span class="achievement-category">Ar</span>
                    <p class="achievement-description">COMING SOON</p>
                    <img class="foto-prestasi" src="{{ asset('images/coming-soon.png') }}" alt="Deskripsi Prestasi">
                    <div class="achievement-meta">
                        <div class="meta-item"><span class="meta-icon">📅</span><span>Coming Soon</span></div>
                        <div class="meta-item"><span class="meta-icon">📍</span><span>Coming Soon</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap Modal Structure (MODIFIED) -->
    <div class="modal fade" id="programModal" tabindex="-1" aria-labelledby="programModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="programModalLabel">Detail Program</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <!-- Bagian Detail Program -->
                        <div class="col-md-4 text-center">
                            <img src="" alt="Program Logo" id="modalProgramLogo" class="img-fluid mb-3"
                                style="max-height: 150px;">
                        </div>
                        <div class="col-md-8">
                            <h4 id="modalProgramTitle">Nama Program</h4>
                            <p id="modalProgramDescription">Deskripsi detail program akan muncul di sini...</p>
                            <hr>
                            <!-- bisa tetap menampilkan info kontak di sini jika mau -->
                            <h5>Informasi Kontak Pendaftaran:</h5>
                            <p id="modalProgramRegistrationInfo">Detail kontak pendaftaran akan muncul di sini...</p>
                        </div>
                    </div>

                    <hr> <!-- Garis pemisah sebelum form -->

                    <!-- Bagian Form Pendaftaran -->
                    <h5>Formulir Pendaftaran</h5>
                    <form id="registrationForm">
                        <!-- Hidden input untuk menyimpan nama program yang dipilih -->
                        <input type="hidden" id="formProgramName" name="programName" value="">

                        <div class="mb-3">
                            <label for="formName" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="formName" name="fullName" required>
                        </div>
                        <div class="mb-3">
                            <label for="formClass" class="form-label">Kelas</label>
                            <input type="text" class="form-control" id="formClass" name="class"
                                placeholder="Contoh: X IPA 1" required>
                        </div>
                        <div class="mb-3">
                            <label for="formContact" class="form-label">Nomor WhatsApp/Telepon Aktif</label>
                            <input type="tel" class="form-control" id="formContact" name="contact"
                                placeholder="Contoh: 081234567890" required>
                        </div>
                        <div class="mb-3">
                            <label for="formReason" class="form-label">Alasan Singkat Bergabung (Opsional)</label>
                            <textarea class="form-control" id="formReason" name="reason" rows="2"></textarea>
                        </div>
                        <!-- Tombol Submit Form di Modal Footer  agar lebih rapi -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    @guest
                        <button type="button" class="btn btn-primary" disabled title="Silakan login untuk mendaftar">Kirim
                            Pendaftaran</button>
                        <span class="text-danger ms-2">Anda harus login untuk melakukan pendaftaran.</span>
                    @else
                        <button type="submit" class="btn btn-primary" form="registrationForm">Kirim Pendaftaran</button>
                    @endguest
                </div>
            </div>
        </div>
    </div>


    <script>
        document.querySelectorAll('.filter-tab').forEach(function(tab) {
            tab.addEventListener('click', function(e) {
                e.preventDefault();
                // Hapus 'active' dari semua tab
                document.querySelectorAll('.filter-tab').forEach(function(t) {
                    t.classList.remove('active');
                });
                // Tambahkan 'active' ke tab yang diklik
                this.classList.add('active');
                // (Opsional) Lakukan filter konten di sini

                // Ambil kategori dari href atau data-filter
                let targetId = this.querySelector('a') ? this.querySelector('a').getAttribute('href')
                    .replace('#', '') : this.getAttribute('data-filter');

                // Sembunyikan semua kategori
                document.querySelectorAll(
                    '#all, #academic, #organisasi, #sports, #arts, #science, #religious').forEach(
                    function(section) {
                        section.style.display = 'none';
                    });

                // Tampilkan kategori yang dipilih
                let targetSection = document.getElementById(targetId);
                if (targetSection) {
                    targetSection.style.display = 'block';
                }
            });
        });

        // Default: tampilkan hanya kategori 'all'
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('#all, #academic, #organisasi, #sports, #arts, #science, #religious').forEach(
                function(
                    section) {
                    section.style.display = 'none';
                });
            let defaultSection = document.getElementById('all');
            if (defaultSection) {
                defaultSection.style.display = 'block';
            }
        });

        document.querySelectorAll('.activity-card').forEach(function(card) {
            card.addEventListener('click', function() {
                var logo = card.getAttribute('data-program-logo');
                document.getElementById('modalProgramLogo').src = logo;
                // ...ambil dan isi data lain seperti title, description, registration...
            });
        });
    </script>
@endsection
