<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Berita::insert([
            [
                'judul' => 'Judul Berita 1',
                'tanggal' => '2021-01-01',
                'deskripsisingkat' => 'Deskripsi singkat berita 1',
                'deskripsi' => 'Deskripsi berita 1',
                'image' => 'Berita_20241023045427_xqMCmzln.jpg',
                'link' => "https://wa.me/81225218812",
            ],
            [
                'judul' => 'Judul Berita 2',
                'tanggal' => '2021-01-02',
                'deskripsisingkat' => 'Deskripsi singkat berita 2',
                'deskripsi' => 'Deskripsi berita 2',
                'image' => 'Berita_20241023132352_FJy4g04Y.jpg',
                'link' => "https://wa.me/81225218812",
                ],
            [
                'judul' => 'Judul Berita 3',
                'tanggal' => '2021-01-03',
                'deskripsisingkat' => 'Deskripsi singkat berita 3',
                'deskripsi' => 'Deskripsi berita 3',
                'image' => 'Berita_20241023132603_Yp6B0LFD.jpg',
                'link' => "https://wa.me/81225218812",
                ],
            ]);
    }
}
