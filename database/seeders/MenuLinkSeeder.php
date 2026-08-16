<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $links = [
            ['title' => 'Lomba Sesorah', 'url' => 'https://youtu.be/w5aLHBek2WQ', 'type' => 'pengumuman', 'order' => 1],
            ['title' => 'Lomba Macapat', 'url' => 'https://youtu.be/irnF8B83N1Q', 'type' => 'pengumuman', 'order' => 2],
            ['title' => 'Lomba KHAD', 'url' => 'https://youtu.be/egUg7eYGTlE', 'type' => 'pengumuman', 'order' => 3],
            ['title' => 'Sang Juara', 'url' => 'http://sangjuara.semarangkota.go.id/', 'type' => 'ppdb', 'order' => 1],
            ['title' => 'PPDB SDN Pendrikan Lor 02', 'url' => 'http://ppd.semarangkota.go.id/', 'type' => 'ppdb', 'order' => 2],
            ['title' => 'INFO Pendaftaran', 'url' => 'https://ppd.semarangkota.go.id/sd/infopendaftaran.html', 'type' => 'ppdb', 'order' => 3],
        ];

        foreach ($links as $link) {
            \App\Models\MenuLink::create($link);
        }
    }
}
