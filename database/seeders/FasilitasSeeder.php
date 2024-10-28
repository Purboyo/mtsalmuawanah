<?php

namespace Database\Seeders;

use App\Models\Fasilitas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fasilitas::insert([
            [
                'nama'=> 'Kursi',
                'jumlah'=> 100,
                'konten' => 'Ini Kursi',
                'image' => 'Fasilitas20240917040926_cI2rofvL.jpeg'
            ],
            [
                'nama'=> 'Meja',
                'jumlah'=> 50,
                'konten' => 'Ini Meja',
                'image' => 'Fasilitas20240917034504_OnQgdAoc.jpeg'
            ],
            [
                'nama'=> 'Proyektor',
                'jumlah'=> 20,
                'konten' => 'Ini Proyektor',
                'image' => 'Fasilitas20240917041402_9cRdX4Gh.jpeg'
            ],
            [
                'nama'=> 'Ruang Kelas',
                'jumlah'=> 4,
                'konten' => 'Ini Ruang Kelas',
                'image' => 'Fasilitas20240917041443_ABIExhRQ.jpg'
            ],
            [
                'nama'=> 'Lapangan',
                'jumlah'=> 1,
                'konten' => 'Ini Lapangan',
                'image' => 'Fasilitas20240917041938_QV25q32D.JPG'
        ]]);
    }
}
