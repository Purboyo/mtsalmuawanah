<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Berita::insert([
            [
                'judul' => 'Dummy Berita 1',
                'tanggal' => '2024-11-29',
                'deskripsisingkat' => '**Deskripsi singkat berita dummy 1**. Pada berita ini, kita akan membahas berbagai aspek penting yang terjadi di MTS Al-Mu\'awanah. Hal ini memberikan pemahaman yang lebih jelas tentang kegiatan dan kemajuan yang terjadi.',
                'deskripsi' => '**Deskripsi lengkap berita dummy 1**: Berita ini menyajikan informasi lengkap tentang perkembangan terbaru di MTS Al-Mu\'awanah. Pada tahun 2024, berbagai kegiatan edukasi, pelatihan, dan peningkatan kualitas infrastruktur dilaksanakan untuk mendukung kemajuan madrasah. Kami juga melakukan berbagai program yang akan membawa dampak positif bagi siswa dan masyarakat sekitar.',
                'image' => 'Berita_20241031130958_9KpOmOG1.jpg',
                'link' => "https://wa.me/81225218812",
            ],
            [
                'judul' => 'Dummy Berita 2',
                'tanggal' => '2024-11-29',
                'deskripsisingkat' => '**Deskripsi singkat berita dummy 2**. Berita ini menggambarkan kegiatan yang dilakukan oleh sekolah dalam rangka memperingati hari besar nasional. Kami selalu berusaha memberikan kontribusi kepada masyarakat melalui acara-acara yang bertujuan untuk meningkatkan kesadaran sosial.',
                'deskripsi' => '**Deskripsi lengkap berita dummy 2**: Pada berita ini, kami akan membahas acara peringatan hari besar nasional yang berlangsung di MTS Al-Mu\'awanah. Dalam acara tersebut, siswa dan pengajar terlibat dalam berbagai kegiatan seperti lomba, seminar, dan diskusi. Kegiatan ini bertujuan untuk mendekatkan nilai-nilai kebangsaan kepada generasi muda. MTS Al-Mu\'awanah berkomitmen untuk melahirkan individu yang berkarakter dan berwawasan luas.',
                'image' => 'Berita_20241115060520_AxHQ3i6a.jpg',
                'link' => "https://wa.me/81225218812",
            ],
            [
                'judul' => 'Dummy Berita 3',
                'tanggal' => '2024-11-29',
                'deskripsisingkat' => '**Deskripsi singkat berita dummy 3**. Kegiatan ini melibatkan berbagai pihak untuk mencapai tujuan bersama, termasuk siswa, pengajar, dan masyarakat. Kami juga memperkenalkan program-program baru yang bertujuan untuk mengoptimalkan pembelajaran di sekolah.',
                'deskripsi' => '**Deskripsi lengkap berita dummy 3**: Dalam berita ini, kami akan membahas berbagai program baru yang diluncurkan di MTS Al-Mu\'awanah, mulai dari pengembangan kurikulum hingga implementasi teknologi dalam proses belajar mengajar. Program-program ini dirancang untuk meningkatkan kualitas pendidikan dan mempersiapkan siswa agar siap menghadapi tantangan masa depan. Kami juga memberikan pelatihan bagi pengajar untuk memastikan keberhasilan program ini.',
                'image' => 'Berita_20241115144438_nz8TMxSw.jpg',
                'link' => "https://wa.me/81225218812",
            ],
            ]);
    }
}
