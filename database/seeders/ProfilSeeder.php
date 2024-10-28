<?php

namespace Database\Seeders;

use App\Models\Profil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profil::create([
            'judul' => 'Mts Al-Muawanah Kawunganten',
            'subjudul' => 'Didirikan pada tahun 1993, berlokasi di Dusun Tegalanyar Rt. 002/003 Desa Kalijeruk Kecamatan Kawunganten. Madrasah ini didirikan dalam upaya menyediakan pendidikan masyarakat di sekitar kecamatan Kawunganten yang tidak terjangkau oleh Madrasah lain yang telah ada. ',
            'sejarahsingkat' => 'Tahun demi tahun MTs. Al-Mu’awanah selalu mengalami perkembangan/ kemajuan, baik dari segi kualitas maupun kuantitas . Dari segi kualitas dapat diukur dari status akreditasi Madrasah yang meningkat terus (terakhir status terakreditasi dengan nilai B), prestasi akademik maupun non akademik dari siswa-siswinya, serta fasilitas pendukung kegiatan belajar mengajar di Madrasah, dan lain sebagainya. Dan berikut adalah program unggulanya :',
            'list1' => 'Tahfizul Qur’an',
            'list2' => 'Pembelajaran Iqro',
            'list3' => 'Boarding School',
            'penutup' => 'Dalam kiprahnya di dunia pendidikan mulai dari sejak berdirinya sampai dengan saat ini, MTs. Al-Mu’awanah telah berhasil mengukir banyak prestasi terutama pada lingkup kecamatan dan kabupaten, baik prestasi akademik maupun non akademik. '
        ]);
    }
}
