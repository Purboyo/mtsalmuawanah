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
        User::insert([
            [
                'name' =>'SuperAdmin',
                'email' => 'SuperAdmin@gmail.com',
                'password' => 'AdminSuper123',
                'role' => 'SuperAdmin',
                'image' => '/image/users/SuperAdmin.jpg',
            ],
            [
                'name' =>'Purboyo',
                'email' => 'brotoumbaranp@gmail.com',
                'password' => '123',
                'role' => 'Admin',
                'image' => '/image/users/purboyo.jpg',
            ]
        ]);

        $this->call([
            AddppdbSeeder::class,
            BeritaSeeder::class,
            DeskripsiSeeder::class,
            DokumentasiSeeder::class,
            EkstrakurikulerSeeder::class,
            FasilitasSeeder::class,
            KontakSeeder::class,
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
