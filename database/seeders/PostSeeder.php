<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Post::create([
            'title' => 'PPDB (Penerimaan Peserta Didik Baru Jenjang Sekolah Dasar)',
            'slug' => 'ppdb-penerimaan-peserta-didik-baru-jenjang-sekolah-dasar',
            'content' => 'Informasi mengenai PPDB SDN Pendrikan Lor 02 Semarang...',
            'image' => 'simulasi1.jpeg',
            'type' => 'news'
        ]);
        \App\Models\Post::create([
            'title' => 'URBAN FARMING',
            'slug' => 'urban-farming',
            'content' => 'Kegiatan Urban Farming di lingkungan sekolah.',
            'image' => 'rapat1.jpeg',
            'type' => 'news'
        ]);
        \App\Models\Post::create([
            'title' => 'Lomba Bahasa Jawa Mata Lomba : Sesorah',
            'slug' => 'lomba-bahasa-jawa-sesorah',
            'content' => 'Lomba Bahasa Jawa Mata Lomba : Sesorah SDN Pendrikan Lor 02 Semarang Tahun 2021',
            'image' => 'background.jpg',
            'type' => 'announcement'
        ]);
    }
}
