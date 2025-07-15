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

    <!-- Information -->
    <h2 class="section-title">Program Peminatan</h2>
    <div class="row g-4 activities-grid">
        <!-- Grid Bootstrap -->

        <!-- Activity 1: Matematika -->
        <div class="col-md-6 col-lg-4">
            <div class="activity-card" data-bs-toggle="modal" data-bs-target="#programModal2" data-program-title="Matematika"
                data-program-logo="{{ asset('images/logo-mtk.png') }}"
                data-program-description="Program peminatan Matematika dirancang untuk mengasah kemampuan berpikir logis, analitis, dan pemecahan masalah. Siswa akan mendalami konsep-konsep lanjutan seperti kalkulus, aljabar linear, dan statistika, serta aplikasinya dalam berbagai bidang ilmu dan teknologi.">
                <!-- Konten yang terlihat di kartu -->
                <img src="{{ asset('images/logo-mtk.png') }}" class="activity-logo" />
                <h3 class="activity-title">Matematika</h3>
                <p class="activity-description">
                    Memperdalam pemahaman dan keterampilan di bidang matematika.
                </p>
            </div>
        </div>

        <!-- Activity 2: Kimia -->
        <div class="col-md-6 col-lg-4">
            <div class="activity-card"  data-bs-toggle="modal" data-bs-target="#programModal2" data-program-title="Kimia"
                data-program-logo="{{ asset('images/logo-kimia.png') }}"
                data-program-description= " Memungkinkan siswa/i untuk mendalami dan spesialisasi dalam area tertentu dalam ilmu kimia, seperti kimia organik, anorganik, dan biokimia. Siswa akan belajar melalui praktikum di laboratorium untuk memahami reaksi dan struktur materi.">
                <!-- Konten yang terlihat di kartu -->
                <img src="{{ asset('images/logo-kimia.png') }}" class="activity-logo" />
                <h3 class="activity-title">Kimia</h3>
                <p class="activity-description">
                    Memungkinkan siswa/i untuk mendalami dan spesialisasi dalam area
                    tertentu dalam ilmu kimia.
                </p>
            </div>
        </div>

        <!-- Activity 3: Fisika -->
        <div class="col-md-6 col-lg-4">
            <div class="activity-card" data-bs-toggle="modal" data-bs-target="#programModal2" data-program-title="Fisika"
                data-program-logo="{{ asset('images/logo-fisika.png') }}"
                data-program-description= "Program peminatan Fisika dirancang untuk melatih kemampuan berpikir logis, analitis, dan sistematis dalam memecahkan masalah-masalah fisis di sekitar kita, dari mekanika hingga fisika modern.">
                <!-- Konten yang terlihat di kartu -->
                <img src="{{ asset('images/logo-fisika.png') }}" class="activity-logo" />
                <h3 class="activity-title">Fisika</h3>
                <p class="activity-description">
                    Melatih kemampuan berpikir logis, analitis, dan sistematis.
                </p>
            </div>
        </div>

        <!-- Activity 4: Biologi -->
        <div class="col-md-6 col-lg-4">
            <div class="activity-card" data-bs-toggle="modal" data-bs-target="#programModal2" data-program-title="Biologi"
                data-program-logo="{{ asset('images/logo-biologi.png') }}"
                data-program-description="Memperdalam pengetahuan dan keterampilan dalam berbagai bidang ilmu biologi, mencakup genetika, ekologi, dan bioteknologi. Siswa akan belajar memahami kompleksitas makhluk hidup dan interaksinya dengan lingkungan melalui teori dan observasi.">
                <!-- Konten yang terlihat di kartu -->
                <img src="{{ asset('images/logo-biologi.png') }}" class="activity-logo" />
                <h3 class="activity-title">Biologi</h3>
                <p class="activity-description">
                    Memperdalam pengetahuan dan keterampilan mahasiswa dalam bidang
                    tertentu dalam ilmu biologi. .
                </p>
            </div>
        </div>

        <!-- Activity 5: Tafsir Sains -->
        <div class="col-md-6 col-lg-4">
            <div class="activity-card" data-bs-toggle="modal" data-bs-target="#programModal2" data-program-title="Tafsi Sains"
                data-program-logo="{{ asset('images/logo-tafsirsains.png') }}"
                data-program-description= "Program unik yang mengintegrasikan pemahaman Al-Qur'an dengan pendekatan ilmiah, khususnya pada ayat-ayat kauniyah yang berkaitan dengan fenomena alam dan ilmu pengetahuan modern, untuk memperkuat iman dan intelektualitas.">
                <!-- Konten yang terlihat di kartu -->
                <img src="{{ asset('images/logo-tafsirsains.png') }}" class="activity-logo" />
                <h3 class="activity-title">Tafsir Sains</h3>
                <p class="activity-description">
                    Mengembangkan minat dan bakat dalam penelitian ilmiah.
                </p>
            </div>
        </div>

        <!-- Activity 6: Desain Grafis  -->
        <div class="col-md-6 col-lg-4">
            <div class="activity-card" data-bs-toggle="modal" data-bs-target="#programModal2" data-program-title="Desain Grafis"
                data-program-logo="{{ asset('images/logo-degraf.png') }}"
                data-program-description= "Mengembangkan kreativitas dan keterampilan teknis dalam komunikasi visual. Siswa akan belajar menggunakan perangkat lunak desain terkemuka untuk membuat logo, poster, ilustrasi, dan materi promosi lainnya secara efektif dan estetis">
                <!-- Konten yang terlihat di kartu -->
                <img src="{{ asset('images/logo-degraf.png') }}" class="activity-logo" />
                <h3 class="activity-title">Desain Grafis</h3>
                <p class="activity-description">
                    Memahami Al-Qur'an dengan pendekatan ilmiah, khususnya pada
                    ayat-ayat yang berkaitan dengan ilmu pengetahuan.
                </p>
            </div>
        </div>
    </div>
    <!-- Tutup .row .activities-grid -->

    <div class="modal fade" id="programModal2" tabindex="-1" aria-labelledby="programModalLabel" aria-hidden="true">
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
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.activity-card').forEach(function(card) {
            card.addEventListener('click', function() {
                var logo = card.getAttribute('data-program-logo');
                document.getElementById('modalProgramLogo').src = logo;
                // ...ambil dan isi data lain seperti title, description, registration...
                const description = this.getAttribute('data-program-description');
                const title = this.getAttribute('data-program-title');

                const modalTitle = document.getElementById('modalProgramTitle');
                const modalDescription = document.getElementById('modalProgramDescription');

                modalTitle.textContent = title;
                modalDescription.textContent = description;

            });
        });
    </script>
@endsection
