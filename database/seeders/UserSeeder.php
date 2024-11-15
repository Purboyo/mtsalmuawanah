<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
    }
}
