@extends('layouts.app')

@section('content')

<style>
        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            left: 50%;
            transform: translateX(-50%);
            max-width: 100%;
            width: 100vw;

        }

        .carousel-item img {
            height: 750px;
            object-fit: cover;
            width: 100%;
        }

        .carousel-caption h5 {
            font-size: 2rem;
        }

        .carousel-caption p {
            font-size: 1rem;
        }

        @media (max-width: 768px) {
            .carousel-caption {
                padding: 0.5rem 1rem;
                max-width: 95%;
            }

            .carousel-item img {
                height: 350px;
            }

            .carousel-caption h5 {
                font-size: 1.1rem;
            }

            .carousel-caption p {
                font-size: 0.5rem;
            }
        }
    </style>
    <div class="container-fluid">

         

    <div id="carouselExampleCaptions" class="carousel slide mb-2 mt-2" style="border-radius: 10px;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="{{ asset('images/ldkms.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Kegiatan LDKMS</h5>
                    <p>#exitingschool_news</p>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="{{ asset('images/school.jpg') }}" class="border rounded d-block w-100" alt="school">
                <div class="carousel-caption">
                    <h5>Ma Sains Roundlotul Quran Lamongan</h5>
                    <p>#exitingschool_news</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/FootagePramuka.JPG') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Extrakulikuler Pramuka</h5>
                    <p>#exitingschool_news</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

        <div class="text-light p-3"
            style="background-color: #1f4068; font-size: 1.3rem; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-radius: 5px;">
            Sejarah Ma Sains Roundlotul Quran Lamongan</div>
        <div>
            <p class="h5 m-2" style="font-size: 1.2rem; text-align:justify; line-height:1.4;">
                Pada tahun 2016 Setelah dirasa cukup matang dalam pengelolaan MTs Terpadu Roudlotul Qur’an (Master RQ),
                dirasa penanaman akhlak, iman ubudiyah masih bisa tergoyahkan keadaan baik lingkungan maupun pergaulan,
                maka dirasa perlu lebih menguatkan akhlak iman ubudiyah melalui pendalaman ilmu syariat tasawuf anak-anak
                dalam lembaga Madrasah Aliyah Sains RQ,
                dipanggil MASA RQ. Di Masa RQ ini anak-anak digodok sedemikian rupa, mulai dari kelas Olim, jurnal ubudiyah,
                try out sejak kelas X dll,
                yang semoga ijtihad ini bisa menggoalkan cita-cita anak anak yang berhimmah menuntut ilmu di perguruan
                tinggi yang bagus. Karenanya anak-anak harus  bermodal besar,
                tirakat kuat, tahajud sungguh-sungguh, dhuha semangat, puasa Senin Kamis dijalankan.
            </p>
        </div>
        <div class="text-light p-3"
            style="background-color: #1f4068; font-size: 1.3rem; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-radius: 5px;">
            Visi & Misi Ma Sains Roundlotul Quran Lamongan</div>
        <div class="mt-3">

            <div class="card mb-2">
                <div class="card-body" style="background-color: #990000; border-radius:5px;">
                    <h5 class="card-title text-light"
                        style="font-size: 2rem; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                        Visi</h5>
                    <p class="card-text text-light">Mewujudkan generasi Qur'ani yang unggul dalam prestasi akademik,
                        berwawasan global dan berakhlakul karimah.</p>
                </div>
            </div>


            <div class="card">
                <div class="card-body " style="background-color: #0066aa; border-radius:5px;">
                    <h5 class="card-title text-light"
                        style="font-size: 2rem; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                        Misi</h5>
                    <p class="card-text text-light">Menyelenggarakan pendidikan yang mengintegrasikan keilmuan sains dan
                        nilai-nilai keislaman Mengembangkan pembelajaran berbasis teknologi informasi dan komunikasi
                        Menumbuhkan semangat menghafal dan mengamalkan Al-Qur'an Membekali peserta didik dengan keterampilan
                        untuk bersaing di era global Menciptakan lingkungan pendidikan yang islami,kondusif, dan inovatif
                    </p>
                </div>
            </div>

        </div>

        <div class="text-light p-3 mt-3"
            style="background-color: #1f4068; font-size: 1.3rem; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-radius: 5px;">
            Data Siswa, Siswi & Guru Ma Sains Roundlotul Quran Lamongan</div>
        <div>
            <div class="row mt-3 justify-content-center">
                <div class="col-sm-6 mb-3 mb-sm-0" style="width: 30rem;">
                    <div class="card" style="border-radius: 10px;">
                        <img src="{{ asset('images/training.png') }}" class="card-img-top" alt="guru">
                        <div class="card-body">
                            <h5 class="card-title">Profil Guru</h5>
                            <p class="card-text"></p>
                            <a href="{{ route('guru') }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" style="width: 30rem;">
                    <div class="card" style="border-radius: 10px;">
                        <img src="{{ asset('images/students.png') }}" class="card-img-top" alt="murid">
                        <div class="card-body">
                            <h5 class="card-title">Data Siswa & Siswi</h5>
                            <p class="card-text"></p>
                            <a href="{{ route('siswa') }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
