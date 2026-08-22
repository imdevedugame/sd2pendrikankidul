<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\HeroSlider::create([
            'title' => 'Selamat Datang di SDN Pendrikan Lor 02',
            'subtitle' => 'Membentuk generasi penerus bangsa yang berakhlak mulia, cerdas, dan berprestasi.',
            'image' => 'hero.jpeg', // Fallback to public/images/hero.jpeg initially
            'button_text' => 'Pelajari Lebih Lanjut',
            'button_url' => '/about'
        ]);
    }
}
