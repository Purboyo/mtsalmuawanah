<?php

namespace Database\Seeders;

use App\Models\Visi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Visi::create ([
            'visi' => 'Islami, Berakhlak Karimah, Berkualitas, Berprestasi dan Terampil'
        ]);
    }
}
