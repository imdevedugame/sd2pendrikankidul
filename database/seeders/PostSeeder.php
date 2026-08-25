<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
class PostSeeder extends Seeder {
    public function run(): void {
        $posts = [
            ['title' => 'PPDB 2026 Dibuka', 'slug' => 'ppdb-2026', 'content' => 'Informasi pendaftaran siswa baru...', 'image' => 'simulasi1.jpeg', 'type' => 'news'],
            ['title' => 'Kegiatan Urban Farming', 'slug' => 'urban-farming', 'content' => 'Siswa belajar menanam sayuran hidroponik.', 'image' => 'rapat1.jpeg', 'type' => 'news'],
            ['title' => 'Juara 1 Lomba Sesorah', 'slug' => 'juara-sesorah', 'content' => 'Siswa kami memenangkan lomba tingkat kota.', 'image' => 'background.jpg', 'type' => 'news'],
            ['title' => 'Vaksinasi Anak Usia SD', 'slug' => 'vaksinasi-anak', 'content' => 'Jadwal vaksinasi bekerja sama dengan Puskesmas.', 'image' => 'simulasi2.jpeg', 'type' => 'news'],
            ['title' => 'Peringatan Hari Guru', 'slug' => 'hari-guru', 'content' => 'Acara spesial dipersembahkan oleh para siswa.', 'image' => 'rapat2.jpeg', 'type' => 'news'],
            ['title' => 'Kunjungan Museum', 'slug' => 'kunjungan-museum', 'content' => 'Study tour kelas 5 ke Museum Jawa Tengah.', 'image' => 'hero.jpeg', 'type' => 'news'],
            ['title' => 'Pengumuman Libur Semester', 'slug' => 'libur-semester', 'content' => 'Libur panjang akhir semester ganjil.', 'image' => null, 'type' => 'announcement'],
            ['title' => 'Jadwal Pengambilan Raport', 'slug' => 'raport', 'content' => 'Pengambilan raport oleh wali murid.', 'image' => null, 'type' => 'announcement'],
        ];
        foreach($posts as $p) { \App\Models\Post::create($p); }
    }
}
