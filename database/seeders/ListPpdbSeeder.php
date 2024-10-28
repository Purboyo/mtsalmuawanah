<?php

namespace Database\Seeders;

use App\Models\Listppdb;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ListPpdbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Listppdb::insert([
            [
                'list' => 'Program unggulan seperti Tahfizul Quran, Pembelajaran Iqro, dan Boarding School',
            ],
            [
                'list' => 'Fasilitas lengkap dan lingkungan belajar yang nyaman',
            ],
            [
                'list' => 'Tenaga pengajar yang profesional dan berpengalaman',
            ],
        ]);
    }
}
