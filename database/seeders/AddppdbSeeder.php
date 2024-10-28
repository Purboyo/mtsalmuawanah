<?php

namespace Database\Seeders;

use App\Models\addppdb;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddppdbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        addppdb::insert([
            [
                'ikon' => 'fa-chalkboard-teacher',
                'title' => 'Pengajar Profesional',
                'description' => 'Kemi memiliki pengajar profesional dan berpengalaman di bidangnya',
            ],
            [
                'ikon' => 'fa-graduation-cap',
                'title' => 'Kurikulum Terpadu',
                'description' => 'Pengajaran berbasis kurikulum nasional dan kurikulum keagamaan untuk pembentukan karakter siswa',
            ],
            [
                'ikon' => 'fa-school',
                'title' => 'Fasilitas Lengkap',
                'description' => 'Fasilitas modern yang mendukung proses belajar mengajar mulai dari lab komputer hingga lapangan yang luas',
            ],
        ]);
    }
}
