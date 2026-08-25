<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
class HeroSliderSeeder extends Seeder {
    public function run(): void {
        $slides = [
            ['title' => 'Selamat Datang di SDN Pendrikan Lor 02', 'subtitle' => 'Membentuk generasi unggul dan berkarakter.', 'image' => 'hero.jpeg', 'button_text' => 'Profil Sekolah', 'button_url' => '/profil'],
            ['title' => 'Fasilitas Belajar Modern', 'subtitle' => 'Lingkungan belajar yang aman, nyaman, dan digital.', 'image' => 'background.jpg', 'button_text' => 'Lihat Fasilitas', 'button_url' => '/profil#fasilitas'],
            ['title' => 'Pendaftaran Siswa Baru 2026', 'subtitle' => 'Bergabunglah bersama kami untuk masa depan cerah.', 'image' => 'simulasi1.jpeg', 'button_text' => 'Cek SPMB', 'button_url' => 'http://ppd.semarangkota.go.id/'],
        ];
        foreach($slides as $s) { \App\Models\HeroSlider::create($s); }
    }
}
