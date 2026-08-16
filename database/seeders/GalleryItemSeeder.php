<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GalleryItemSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\GalleryItem::create([
            'title' => 'Simulasi PTM',
            'image' => 'simulasi1.jpeg'
        ]);
        \App\Models\GalleryItem::create([
            'title' => 'Simulasi PTM (2)',
            'image' => 'simulasi2.jpeg'
        ]);
        \App\Models\GalleryItem::create([
            'title' => 'Rapat Persiapan PTM',
            'image' => 'rapat1.jpeg'
        ]);
        \App\Models\GalleryItem::create([
            'title' => 'Rapat Persiapan PTM (2)',
            'image' => 'rapat2.jpeg'
        ]);
    }
}
