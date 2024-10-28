<?php

namespace Database\Seeders;

use App\Models\p5ra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class P5raSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        p5ra::insert([
            [
                'judul' => 'Pendidikan dan Pengajaran',
                'deskripsi' => 'Kami menyediakan pendidikan berkualitas dengan metode pengajaran terbaru dan fasilitas yang memadai untuk mendukung proses belajar mengajar.',
                'gambar' => 'P5ra20241023024822_m1imldId.JPG',
            ],
            [
                'judul' => 'Penelitian',
                'deskripsi' => 'Kami aktif dalam penelitian dengan tujuan untuk meningkatkan kualitas pendidikan dan memberikan kontribusi pada ilmu pengetahuan.',
                'gambar' => 'P5ra20241023025901_8wPzHul1.JPG',
            ],
            [
                'judul' => 'Pengabdian kepada Masyarakat',
                'deskripsi' => 'Kegiatan pengabdian masyarakat kami berfokus pada pemberdayaan dan peningkatan kesejahteraan komunitas di sekitar kami.',
                'gambar' => 'P5ra20241023025801_nyiHbgTz.JPG',
            ],
            [
                'judul' => 'Aset dan Fasilitas',
                'deskripsi' => 'Kami memiliki aset dan fasilitas yang mendukung aktivitas pendidikan, penelitian, dan pengabdian kepada masyarakat dengan standar tinggi.',
                'gambar' => 'P5ra20241023031806_CgmVKDtT.JPG',
            ]
        ]);
    }
}
