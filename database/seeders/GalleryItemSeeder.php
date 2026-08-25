<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
class GalleryItemSeeder extends Seeder {
    public function run(): void {
        $items = [
            ['title' => 'Kegiatan Kelas', 'image' => 'simulasi1.jpeg', 'description' => 'Siswa sedang fokus belajar di kelas.'],
            ['title' => 'Pramuka', 'image' => 'simulasi2.jpeg', 'description' => 'Latihan baris berbaris pramuka.'],
            ['title' => 'Rapat Guru', 'image' => 'rapat1.jpeg', 'description' => 'Koordinasi guru menyambut tahun ajaran baru.'],
            ['title' => 'Senam Pagi', 'image' => 'rapat2.jpeg', 'description' => 'Senam bersama setiap Jumat.'],
            ['title' => 'Lomba 17an', 'image' => 'background.jpg', 'description' => 'Perayaan kemerdekaan RI.'],
            ['title' => 'Upacara', 'image' => 'hero.jpeg', 'description' => 'Upacara bendera rutin hari Senin.'],
            ['title' => 'Ekstrakurikuler Tari', 'image' => 'simulasi1.jpeg', 'description' => 'Latihan tari tradisional.'],
            ['title' => 'Kunjungan Walikota', 'image' => 'rapat1.jpeg', 'description' => 'Inspeksi sekolah sehat.'],
        ];
        foreach($items as $i) { \App\Models\GalleryItem::create($i); }
    }
}
