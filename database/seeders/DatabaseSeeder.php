<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        DB::table('gurus')->truncate();
        DB::table('siswas')->truncate();

        $gurus = [
            ['nama' => 'Bapak Ahmad', 'nip' => '1234567890', 'mapel' => 'Matematika', 'alamat' => 'Jalan Raya No. 123, Jakarta',],
            ['nama' => 'Ibu Sri', 'nip' => '1234567891', 'mapel' => 'Bahasa Indonesia', 'alamat' => 'Jalan Raya No. 124, Jakarta',],
            ['nama' => 'Bapak Budi', 'nip' => '1234567892', 'mapel' => 'Bahasa Inggris', 'alamat' => 'Jalan Raya No. 125, Jakarta',],
            ['nama' => 'Ibu Dwi', 'nip' => '1234567893', 'mapel' => 'Biologi', 'alamat' => 'Jalan Raya No. 126, Jakarta',],
            ['nama' => 'Bapak Rio', 'nip' => '1234567894', 'mapel' => 'Fisika', 'alamat' => 'Jalan Raya No. 127, Jakarta',],
            ['nama' => 'Ibu Ana', 'nip' => '1234567895', 'mapel' => 'Kimia', 'alamat' => 'Jalan Raya No. 128, Jakarta',],
            ['nama' => 'Bapak Teguh', 'nip' => '1234567896', 'mapel' => 'Olahraga', 'alamat' => 'Jalan Raya No. 129, Jakarta',],
            [
                'nama' => 'Ibu Rina',
                'nip' => '4444444444',
                'mapel' => 'Geografi',
                'alamat' => 'Jalan Raya No. 567, Jakarta',
            ],
            [
                'nama' => 'Bapak Tono',
                'nip' => '5555555555',
                'mapel' => 'Sejarah',
                'alamat' => 'Jalan Raya No. 678, Jakarta',
            ],
            [
                'nama' => 'Ibu Lestari',
                'nip' => '6666666666',
                'mapel' => 'Ekonomi',
                'alamat' => 'Jalan Raya No. 789, Jakarta',
            ],
            [
                'nama' => 'Bapak Sutomo',
                'nip' => '7777777777',
                'mapel' => 'Sosiologi',
                'alamat' => 'Jalan Raya No. 890, Jakarta',
            ],
            [
                'nama' => 'Ibu Widyastuti',
                'nip' => '8888888888',
                'mapel' => 'Antropologi',
                'alamat' => 'Jalan Raya No. 901, Jakarta',
            ]
        ];

        DB::table('gurus')->insert($gurus);

        $siswas = [
            [
                'nama' => 'Ahmad Fauzi',
                'nis' => '1234567890',
                'kelas' => 'XII IPA 1',
                'alamat' => 'Jalan Raya No. 123, Jakarta',
            ],
            [
                'nama' => 'Siti Nurhaliza',
                'nis' => '9876543210',
                'kelas' => 'XII IPS 2',
                'alamat' => 'Jalan Raya No. 456, Jakarta',
            ],
            [
                'nama' => 'Budi Setiawan',
                'nis' => '1111111111',
                'kelas' => 'XII IPA 3',
                'alamat' => 'Jalan Raya No. 789, Jakarta',
            ],
            [
                'nama' => 'Dewi Ratna',
                'nis' => '2222222222',
                'kelas' => 'XII IPS 4',
                'alamat' => 'Jalan Raya No. 901, Jakarta',
            ],
            [
                'nama' => 'Joko Susanto',
                'nis' => '3333333333',
                'kelas' => 'XII IPA 5',
                'alamat' => 'Jalan Raya No. 234, Jakarta',
            ],
            [
                'nama' => 'Rina Widyastuti',
                'nis' => '4444444444',
                'kelas' => 'XII IPS 6',
                'alamat' => 'Jalan Raya No. 567, Jakarta',
            ],
            [
                'nama' => 'Tono Sutomo',
                'nis' => '5555555555',
                'kelas' => 'XII IPA 7',
                'alamat' => 'Jalan Raya No. 678, Jakarta',
            ],
            [
                'nama' => 'Lestari Widyastuti',
                'nis' => '6666666666',
                'kelas' => 'XII IPS 8',
                'alamat' => 'Jalan Raya No. 789, Jakarta',
            ]
        ];

        DB::table('siswas')->insert($siswas);
    }
}
