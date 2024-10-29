<?php

namespace Database\Seeders;

use App\Models\Sambutan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SambutanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sambutan::create([
            'gambar'=> 'kepsek_20240913083808_CAfmnZUi.JPG',
            'nama'=> 'Mafahir, S.E., S.Pd.',
            'konten'=> 'Assalamualaikum Wr. Wb. 
            Selamat datang di website kami, kami adalah perusahaan yang bergerak di bidang penyedia layanan jasa pembuatan website dan aplikasi. Kami menyediakan layanan yang berkualitas dengan harga yang terjangkau. Kami siap melayani anda 24 jam secara 24 jam. Jangan ragu untuk menghubungi kami.
            Wassalamualaikum Wr. Wb.',
            'jabatan'=> 'Kepala Sekolah',
        ]);
    }
}
