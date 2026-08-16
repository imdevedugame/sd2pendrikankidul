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
            'address' => 'Jl. Poncowolo Barat VIII No. 495, Kecamatan Semarang Tengah, Kota Semarang, Provinsi Jawa Tengah.',
            'phone' => '(024) 3539427',
            'email' => 'sdpelor02@hotmail.com',
            'youtube_url' => 'https://www.youtube.com/channel/UCD1xESkO2MDRHwE15qlVEMw',
            'vision' => '"Beriman, Berilmu, Berpretasi Serta Berbudi Pekerti Luhur"',
            'mission' => "1. Menciptakan siswa yang beriman dan bertaqwa kepada Tuhan yang Maha Esa.\n2. Mengembangkan minat dan bakat siswa sehingga dapat meraih prestasi.\n3. Melaksanakan pendidikan sesuai dengan karakter Bangsa Indonesia\n4. Pemberdayaan guru melalui Sistem Pembinaan Guru Profesional secara teratur dan berkelanjutan\n5. Meningkatkan kepedulian dan kemandirian masyarakat di sekitarnya agar ikut mendorong tercapainya keseimbangan antara Iptek dan Imtaq",
            'history' => "SDN Pendrikan Lor 02 berdiri pada tahun 1950 yang berada di dekat pasar bulu, ± 200 M dari letak sekolah saat ini. Yang dibangun secara gotong royong oleh masyarakat Sekitar. Tahun 1970 Bangunan dipindah oleh pemerintah Kota Semarang di Jalan Poncowolo Barat dan sampai saat ini.",
            'hero_title' => 'Cerdas, Berakhlak, dan Berprestasi!',
            'hero_subtitle' => 'Kami berkomitmen untuk memberikan pendidikan terbaik dan membentuk karakter generasi penerus bangsa yang unggul di era digital.',
            'hero_image' => 'background.jpg'
        ]);
    }
}
