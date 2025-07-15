# ClAssign - Sistem Manajemen Tugas Kelas

<p align="center">
<img src="public\images\logo.png" width="200" alt="ClAssign Logo">
</p>

Masa RQ adalah WEBSITE sekolah yang dibangun dengan Laravel. website ini dapat membantu calon siswa untuk mengetahui informasi menganai sekola MA SAINS ROUDLOTUL QUR'AN.

## Fitur Utama
-   **Autentikasi**: Sistem login/register dengan role-based access
-   **Dashboard**: Interface yang user-friendly 
-   **Home**: Berfungsi untuk menampilkan informasi sekolah
-   **Program**: Berfungsi untuk menampilkan informasi extrakulikuler dan prestasi yang diraih oleh siswa
-   **informasi**: Berfungsi untuk menampilkan informasi mata pelajaran
-   **PPDB**: Berfungsi untuk menampilkan informasi mengenai ppdb


## Persyaratan Sistem

-   PHP >= 8.2
-   Composer
-   Database (MySQL/PostgreSQL/SQLite)
-   Web Server (Apache/Nginx)

## Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/dzraka/classign.git
cd classign
```

### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install


### 3. Environment Configuration

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Database Setup

Edit file `.env` untuk konfigurasi database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=masarq_db
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 5. Run Migrations

```bash
# Run database migrations
php artisan migrate

# (Optional) Run seeders for sample data
php artisan db:seed
```


## Menjalankan Aplikasi

### Development Server

```bash
# Start Laravel development server
php artisan serve


Akses aplikasi di: `http://localhost:8000`

### Production

Untuk production, pastikan web server sudah dikonfigurasi dengan benar dan arahkan document root ke folder `public/`.

## Struktur Proyek

```
ClAssign/
├── app/
│   ├── Http/Controllers/     # Controllers
│   ├── Models/              # Eloquent Models
│   └── Providers/           # Service Providers
├── database/
│   ├── migrations/          # Database migrations
│   ├── seeders/            # Database seeders
│   └── factories/          # Model factories
├── public/
│   ├── img/                # Images
│   └── storage/            # Public storage link
├── resources/
│   ├── views/              # Blade templates
│   ├── css/                # CSS files
│   └── js/                 # JavaScript files
├── routes/
│   └── web.php             # Web routes
└── storage/
    ├── app/                # Private storage
    └── logs/               # Application logs
```

## Struktur Routes

### Authentication Routes

```php
GET  /login                 # Halaman login
POST /login                 # Proses login
GET  /register              # Halaman register
POST /register              # Proses register
POST /logout                # Logout
```

### Public Routes

```php
GET  /                      # profil page
```

```php
GET  /program           # program page
GET  /informasi               # informasi page
GET  /informasi               # informasi page
GET  /ppdb               # ppdb page
GET  /guru               # data guru page
GET  /siswa               # data siswa page
GET  /register               # register page
POST  /register               # register page
GET  /login               # login page
POST  /login               # login page

GET  /dashboard            # dashboard page
GET  /dashboard/prestasi           # prestasi page
```

## Contributing

Kontribusi selalu welcome! Silakan buat pull request atau laporkan issue jika menemukan bug.

## Support

Jika ada pertanyaan atau butuh bantuan, silakan buat issue di repository ini.