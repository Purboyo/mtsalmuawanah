<?php

namespace Database\Seeders;

use App\Models\Organisasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Organisasi::insert([
            [
                "nama" => 'OSIS',
                'sub_nama' => 'Organisasi Intra Sekolah',
                'konten' => 'Sebuah Organisasi Intra Sekolah yang berfungsi sebagai wadah bagi siswa untuk berkumpul dan berbagi pengetahuan, ide-ide, aspirasi, dan kritik secara langsung dengan guru-guru, karyawan, dan pihak lainnya.',
                'image' => 'Organisasi20241023032626_6v3ekD1E.jpeg'
            ],
            [
                "nama" => 'PRAMUKA',
                'sub_nama' => 'Praja Muda Karana',
                'konten' => 'Sebuah Organisasi yang berfungsi sebagai wadah bagi anak-anak untuk belajar mandiri, berkreasi, dan berinovasi.',
                'image' => 'Organisasi20241023032648_SknNFqHx.jpeg'
            ],
        ]);
    }
}
