<?php

namespace Database\Seeders;

use App\Models\Ekstrakurikuler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EkstrakurikulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ekstrakurikuler::insert([
            [
                "nama" => 'CATUR ALKA',
                'sub_nama' => 'Catur Al-Muawanah',
                'konten' => 'Ekstrakurikuler yang berisi tentang kegiatan-kegiatan yang berkaitan dengan olahraga catur.',
                'image' => 'Ekstrakurikuler20241023034624_6rqdTnWA.jpeg'
            ],
            [
                "nama" => 'PASKIBRA',
                'sub_nama' => 'Pasukan Pengibar Bendera',
                'konten' => 'Ekstrakurikuler yang berisi tentang kegiatan-kegiatan yang berkaitan dengan PBB atau baris berbaris.',
                'image' => 'Ekstrakurikuler20241023034636_Fpulz1yB.jpeg'
            ],
        ]);
    }
}
