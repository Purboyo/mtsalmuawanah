<?php

namespace Database\Seeders;

use App\Models\Prestasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrestasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Prestasi::insert([
            [
                'title' => 'Juara 1 Lomba Lari dari kenyataan',
                'deskripsi' => 'Juara 1 Lomba Lari dari kenyataan',
                'image' => 'prestasi20240923070407_6zEwA2Cl.JPG',
            ],
            [
                'title' => 'Juara 1 Pentas Seni AKSIOMA 2022',
                'deskripsi' => 'Juara 2 Lomba Pentas Seni AKSIOMA 2022 yang diadakan di Gorontalo, Indonesia',
                'image' => 'prestasi20240923070739_Mi1yZbmC.JPG',
            ],
            [
                'title' => 'Juara 3 Lomba Tingkat II Pramuka 2023',
                'deskripsi' => 'Juara 3 Lomba Tingkat II Pramuka 2023 yang diadakan di Jakarta, Indonesia',
                'image' => 'prestasi20240923070830_IkirzRER.jpg',
            ],
        ]);
    }
}
