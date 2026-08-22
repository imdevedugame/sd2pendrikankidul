<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\SchoolProfile::create([
            'name' => 'SDN Pendrikan Lor 02',
            'address' => 'Jl. Poncowolo Barat V No.650b, Pindrikan Lor, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50131',
            'phone' => '(024) 3539427',
            'email' => 'sdpelor02@hotmail.com',
            'youtube_url' => 'https://youtube.com/',
            'vision' => 'Terwujudnya Peserta Didik Yang Bertaqwa Kepada Tuhan Yang Maha Esa, Berkarakter, Berprestasi, Berwawasan Global Dan Peduli Lingkungan.',
            'mission' => "1. Menanamkan keyakinan/aqidah melalui pengamalan ajaran agama\n2. Mengoptimalkan proses pembelajaran dan bimbingan\n3. Mengembangkan bidang ilmu pengetahuan dan teknologi berdasarkan minat, bakat, dan potensi peserta didik.\n4. Membina kemandirian peserta didik melalui kegiatan pembiasaan, kewirausahaan, dan pengembangan diri.",
            'history' => 'SD Negeri Pendrikan Lor 02 adalah sebuah institusi pendidikan tingkat dasar yang berdedikasi tinggi...',
            'hero_title' => 'Selamat Datang di SDN Pendrikan Lor 02',
            'hero_subtitle' => 'Membentuk generasi penerus bangsa yang berakhlak mulia, cerdas, dan berprestasi.',
            'map_iframe' => '<iframe src="https://maps.google.com/maps?q=Jl.%20Poncowolo%20Barat%20V%20No.650b,%20Pindrikan%20Lor,%20Semarang&t=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'hero_image' => 'background.jpg'
        ]);
    }
}
