<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Sekolah | MA SAINS ROUDLOTUL QUR'AN</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optional: Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 50vh;
        }

        footer {
            background-color: #1a3a5f;
            color: white;
            padding: 40px 0 20px 0;
            /* Atur padding */
            margin-top: 50px;
            /* Beri jarak dari konten utama */
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            /* Grid responsif */
            gap: 40px;
        }

        .footer-section h3 {
            font-size: 18px;
            margin-bottom: 20px;
            color: #ffffff;
            padding-bottom: 10px;
            border-bottom: 1px solid #4a9678;
            /* Garis bawah judul footer */
            display: inline-block;
        }

        .footer-section p,
        .footer-section a {
            color: #ddd;
            margin-bottom: 10px;
            display: block;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .footer-section a:hover {
            color: #4a9678;
            /* Warna hover link footer */
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }

        .social-icons a {
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            /* Warna ikon */
            width: 36px;
            /* Sedikit lebih besar */
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .social-icons a span {
            /* Sembunyikan teks jika hanya ikon */
            /* font-size: 0; */
            /* Atau gunakan ikon FontAwesome */
            font-weight: bold;
        }

        .social-icons a:hover {
            background-color: #4a9678;
            /* Warna hover ikon sosial media */
            transform: scale(1.1);
            /* Efek zoom kecil */
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            margin-top: 30px;
            /* Jarak dari grid footer */
            border-top: 1px solid #444;
            /* Garis pemisah */
            font-size: 14px;
            color: #aaa;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .contact-icon {
            margin-right: 10px;
            color: #4a9678;
            /* Warna ikon kontak */
            width: 20px;
            /* Lebar tetap untuk ikon */
            text-align: center;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark"
        style="background-color: #1f4068; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="logo" width="32" height="32"
                    class="d-inline-block align-text-top me-2">
                MA SAINS RQ
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse mt-1" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ url('/program') }}" class="nav-link">Program</a></li>
                    <li class="nav-item"><a href="{{ url('/informasi') }}" class="nav-link">Informasi</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ url('/ppdb') }}">Pendaftaran PPDB</a></li>
                    @guest
                        <li class="nav-item">
                            <form action="{{ route('login') }}" method="get" class="d-inline">
                                <button type="submit" class="btn btn-outline-light ms-2">Masuk</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                                <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>

            </div>
        </div>
    </nav>

    @yield('content_hero')
    

    <div class="container">
        @yield('content') <!-- Konten halaman masuk di sini -->
    </div>

    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3>Contact Us</h3>
                <div class="contact-item"><span class="contact-icon">📧</span><span>info@masainsrq.sch.id</span></div>
                <div class="contact-item"><span class="contact-icon">📞</span><span>(0322) XXXXXX</span></div>
                <div class="contact-item"><span class="contact-icon">📍</span><span>Jl. Pendidikan No. 1,
                        Lamongan</span>
                </div>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <a href="#">Home</a><a href="#">Program</a><a href="#">Informasi</a>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="#"><span>fb</span></a><a href="#"><span>tw</span></a><a
                        href="#"><span>ig</span></a><a href="#"><span>yt</span></a>
                </div>
            </div>
        </div>
        <div class="copyright">© 2025 MA Sains Roudlotul Qur'an Lamongan.</div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
