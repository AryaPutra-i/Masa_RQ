<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MA SAINS ROUDLOTUL QUR'AN Lamongan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #2B547E;
        }
        .navbar-brand, .nav-link, .footer {
            color: white !important;
        }
        .hero {
            background: url('/images/school.jpg') no-repeat center center;
            background-size: cover;
            height: 80vh;
            position: relative;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .hero h1, .hero h3 {
            text-shadow: 2px 2px 4px rgba(0,0,0,0.6);
        }
        .info-cards {
            background-color: #F9F2DA;
            padding: 30px;
        }
        .card-custom {
            border: 2px solid #2B547E;
            border-radius: 10px;
            text-align: center;
        }
        .card-custom img {
            width: 70px;
            margin-top: 15px;
        }
        .card-custom .btn {
            background-color: #79D8DA;
            color: black;
        }
        .footer {
            background-color: #2B547E;
            color: white;
            padding: 20px 0;
        }
        .logo-img {
            height: 50px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="/images/logo.png" alt="Logo" class="logo-img">
                MA Sains Roudlotul Qur’an Lamongan
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/profil">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pendaftaran/create">Pendaftaran</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Selamat Datang di Website Resmi</h1>
        <h3>MA SAINS ROUDLOTUL QUR'AN Lamongan</h3>
        <p>Jl. Andan Wangi No.93, Kauman, Sidoharjo, Lamongan, Jawa Timur</p>
    </section>

    <!-- Info Cards -->
    <section class="info-cards">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="card card-custom p-3">
                        <img src="https://img.icons8.com/ios-filled/100/000000/teacher.png"/>
                        <h5 class="mt-3">Data Guru</h5>
                        <a href="{{ route('guru.index') }}" class="btn">Detail</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card card-custom p-3">
                        <img src="https://img.icons8.com/ios-filled/100/000000/student-male.png"/>
                        <h5 class="mt-3">Data Siswa</h5>
                        <a href="{{ route('siswa.index') }}" class="btn">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p><strong>Contact Us</strong><br>
                    <a href="mailto:info@schoolprogram.com" class="text-white">info@schoolprogram.com</a><br>
                    +62-857-4950-1863<br>
                    Jl. Andan Wangi No.93, Lamongan, Jawa Timur</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Quick Links</strong><br>
                    About Us<br>
                    Programs<br>
                    Events<br>
                    Contact</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Follow Us</strong><br>
                    <a href="#" class="text-white">Instagram</a><br>
                    <a href="#" class="text-white">Facebook</a></p>
                </div>
            </div>
            <hr class="bg-white">
            <p>&copy; 2025 MA SAINS ROUDLOTUL QUR'AN Lamongan</p>
        </div>
    </footer>
</body>
</html>
