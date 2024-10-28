<?php

namespace Database\Seeders;

use App\Models\misi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        misi::insert([
            [
                'misi' => 'Meletakan dasar-dasar keislaman dengan penerapan amaliyah dan menumbuhkan pengamalan ajaran Islam sehingga siswa dapat tekun beribadah',
            ],
            [
                'misi' => 'Membentuk manusia yang cerdas, terampil, mandiri dan berakhlakul karimah.',
            ],
            [
                'misi' => 'Melaksanakan pembelajaran dan pendampingan secara efektif sehingga setiap siswa dapat berkembang secara optimal.',
            ],
            [
                'misi' => 'Melaksanakan tata tertib sekolah.',
            ],
            [
                'misi' => 'Melaksanakan pembelajaran ekstrakurikuler secara kontinue berdasarkan minat dan bakat siswa, sehingga terwujud siswa yang terampil dan mandiri.',
            ]
        ]);
    }
}
