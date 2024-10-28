<?php

namespace Database\Seeders;

use App\Models\Struktur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StrukturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Struktur::insert([
           [ 'nama' => 'Sugihartoyo, S.Kom.',
            'jabatan' => 'Wakil Kepala Urusan Kesiswaan',
            'image' => 'Struktur_20240913145254_lKQYVGYU.JPG'
        ],
        [
            'nama' => 'Susmiati, S.pd.',
            'jabatan' => 'Wakil Kepala Urusan Kurikulum',
            'image' => 'Struktur_20240913145721_qrWWp5Xq.JPG'
        ],
        [
            'nama' => 'Anis Solikhatun, S.Pd.SD.',
            'jabatan' => 'Wali Kelas VII B',
            'image' => 'Struktur_20240913151610_arkPOOKm.JPG'
        ],
        [
            'nama' => 'Mustolih, S.Pd.I.',
            'jabatan' => 'Wali Kelas VIII A',
            'image' => 'Struktur_20240913153003_usaJDmUn.JPG'
        ]
    ]);
    }
}
