<?php

namespace Database\Seeders;

use App\Models\Deskripsi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeskripsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Deskripsi::create([
            'nama'=> 'MTS AL-Muawanah',
            'npsn' => '20363371',
            'alamat' => 'Dusun Tegalanyar RT. 002/03.',
            'desa' => 'Tegalanyar',
            'kecamatan'=> 'Kawunganten',
            'kota' => 'Cilacap',
            'provinsi'=> 'Jawa Tengah',
            'negara' => 'Indonesia',
            'status' => 'Swasta',
            'bentuk' => 'Madrasah Tsanawiyah'
        ]);
    }
}
