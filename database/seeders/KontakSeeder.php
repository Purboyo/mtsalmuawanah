<?php

namespace Database\Seeders;

use App\Models\Kontak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kontak::create([
            'email' => 'info@mts-almuawanah.sch.id',
            'phone' => '021-5421111',
            'alamat' => 'CW8H+FPV, Desa Kalijeruk Kec, Tegalanyar, Kalijeruk, Kec. Kawunganten, Kabupaten Cilacap, Jawa Tengah 53253',
        ]);
    }
}
