<?php

namespace Database\Seeders;

use App\Models\Link;
use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Link::create([
            'facebook' => 'https://www.facebook.com/mts.almuawanah.3/',
            'instagram' => 'https://www.instagram.com/mts_almuawanah_cilacap?igsh=cWVhZHc0Y2Zvc3Jl',
            'youtube' => 'https://www.youtube.com/@MTsAl-MuawanahKawunganten',
            'whatsapp' => 'https://wa.me/+6281225218812'
        ]);
    }
}
