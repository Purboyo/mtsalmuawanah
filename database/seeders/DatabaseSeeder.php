<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' =>'Purboyo',
            'email' => 'brotoumbaranp@gmail.com',
            'password' => Hash::make('123')
        ]);

        $this->call([
            AddppdbSeeder::class,
            BeritaSeeder::class,
            DeskripsiSeeder::class,
            EkstrakurikulerSeeder::class,
            FasilitasSeeder::class,
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
        ]);
    }
}
