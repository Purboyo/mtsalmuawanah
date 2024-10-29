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
                'maps' => 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d398.7240762408319!2d108.92906565253979!3d-7.583848537188547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1730135745826!5m2!1sid!2sid',
            'email' => 'info@mts-almuawanah.sch.id',
            'phone' => '021-5421111',
            'alamat' => 'CW8H+FPV, Desa Kalijeruk Kec, Tegalanyar, Kalijeruk, Kec. Kawunganten, Kabupaten Cilacap, Jawa Tengah 53253',
        ]);
    }
}
