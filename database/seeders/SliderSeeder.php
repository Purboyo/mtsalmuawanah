<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;
use Illuminate\Support\Facades\Hash;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([
            'title' =>'Deskripsi 1',
            'description' => 'Ini adalah deskripsi 1',
            'image' => "Slider_20241028015548_iPLTw1VB.jpg",
        ]);
    }
}
