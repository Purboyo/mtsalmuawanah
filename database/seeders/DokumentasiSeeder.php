<?php

namespace Database\Seeders;

use App\Models\Dokumentasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DokumentasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dokumentasi::insert([
            [
                'nama' => 'Dokumentasi 1',
                'image' => 'Dokumentasi_20241028142117_K41tg4hl.jpg',
                'filter_id' => 1,
            ],
            [
                'nama' => 'Dokumentasi 2',
                'image' => 'Dokumentasi_20241028142130_n0fw8OAs.jpg',
                'filter_id' => 1,
            ],
            [
                'nama' => 'Dokumentasi 3',
                'image' => 'Dokumentasi_20241028142157_sSUxuNdP.jpg',
                'filter_id' => 1,
            ],
            [
                'nama' => 'Dokumentasi 4',
                'image' => 'Dokumentasi_20241028142212_rv3FMor2.jpg',
                'filter_id' => 2,
            ]
        ]);
    }
}
