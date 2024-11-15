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
            'maps' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d405.4873115930588!2d108.92925374986947!3d-7.583820512483121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6571184d0fc4af%3A0x7d80a15482ab9d89!2sMTS%20Al-Mu&#39;awanah!5e1!3m2!1sid!2sid!4v1731653344531!5m2!1sid!2sid",
            'email' => 'brotoumbaranp@gmail.com',
            'phone' => '+6281225218812',
            'alamat' => 'CW8H+FPV, Desa Kalijeruk Kec, Tegalanyar, Kalijeruk, Kec. Kawunganten, Kabupaten Cilacap, Jawa Tengah 53253',
        ]);
    }
}
