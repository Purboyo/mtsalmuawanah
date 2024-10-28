<?php

namespace Database\Seeders;

use App\Models\PPDB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PpdbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PPDB::create ([
            'title' => 'Penerimaan Peserta Didik Baru (PPDB) 2024',
            'subtitle' => 'Selamat datang di PPDB Madrasah kami. Kami Membuka pendaftaran untuk peserta didik baru tahun ajaran 2024/2025. Bergabunglah dengan kami untuk mendapatkan pendidikan berkualitas dengan berbagai fasilitas unggulan dan program pembelajaran yang menarik.',
            'image' => 'Ppdb_20240917073758_8iRiLxVk.JPG',
            'link' => 'https://wa.me/81225218812',
            'status' => 'Dibuka',
        ]);
    }
}
