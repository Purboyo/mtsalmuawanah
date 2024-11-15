<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Filter;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use League\CommonMark\Extension\CommonMark\Node\Inline\Link;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            AddppdbSeeder::class,
            BeritaSeeder::class,
            DeskripsiSeeder::class,
            DokumentasiSeeder::class,
            EkstrakurikulerSeeder::class,
            FasilitasSeeder::class,
            FilterSeeder::class,
            KontakSeeder::class,
            LinkSeeder::class,
            ListppdbSeeder::class,
            MisiSeeder::class,
            OrganisasiSeeder::class,
            P5raSeeder::class,
            PrestasiSeeder::class,
            PpdbSeeder::class,
            ProfilSeeder::class,
            SambutanSeeder::class,
            SejarahSeeder::class,
            SliderSeeder::class,
            StatistikSeeder::class,
            VisiSeeder::class,
            StrukturSeeder::class,
            UserSeeder::class,
        ]);
    }
}
