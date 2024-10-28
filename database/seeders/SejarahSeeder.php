<?php

namespace Database\Seeders;

use App\Models\Sejarah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SejarahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sejarah::create([
            'deskripsi' => 'MTs. Al-Mu’awanah, Kecamatan Kawunganten didirikan pada tahun 1993, berlokasi di Dusun Tegalanyar Rt. 002/003 Desa Kalijeruk Kecamatan Kawunganten. Madrasah ini didirikan dalam upaya menyediakan pendidikan masyarakat di sekitar kecamatan Kawunganten yang tidak terjangkau oleh Madrasah lain yang telah ada. ',
            'sejarahsingkat' => 'Tahun demi tahun MTs. Al-Mu’awanah selalu mengalami perkembangan/ kemajuan, baik dari segi kualitas maupun kuantitas . Dari segi kualitas dapat diukur dari status akreditasi Madrasah yang meningkat terus (terakhir status terakreditasi dengan nilai B), prestasi akademik maupun non akademik dari siswa-siswinya, serta fasilitas pendukung kegiatan belajar mengajar di Madrasah, dan lain sebagainya. ',
            'foto'=> 'sejarah20241022071132_lE5R0BLQ.JPG',
        ]);
    }
}
