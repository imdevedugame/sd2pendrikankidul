<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programs = [
            [
                'title' => 'Akademik',
                'slug' => 'akademik',
                'short_description' => 'Kurikulum modern yang mendidik siswa menjadi cerdas dan berwawasan luas.',
                'content' => '<p>Program Akademik di SDN Pendrikan Lor 02 difokuskan pada pengembangan intelektual dan keterampilan dasar siswa...</p>',
                'icon_svg' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 48px; height: 48px; margin-bottom: 1.5rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.315 48.315 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" /></svg>',
            ],
            [
                'title' => 'Ekstrakurikuler',
                'slug' => 'ekstrakurikuler',
                'short_description' => 'Beragam kegiatan untuk mengembangkan bakat dan minat peserta didik di luar jam pelajaran.',
                'content' => '<p>Kami menawarkan berbagai program ekstrakurikuler mulai dari Pramuka, Olahraga, hingga Seni Tari...</p>',
                'icon_svg' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 48px; height: 48px; margin-bottom: 1.5rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" /></svg>',
            ],
            [
                'title' => 'Karakter',
                'slug' => 'karakter',
                'short_description' => 'Pendidikan karakter untuk membentuk siswa yang berakhlak mulia dan beriman.',
                'content' => '<p>Pembentukan karakter adalah prioritas kami. Melalui kegiatan keagamaan dan budi pekerti sehari-hari...</p>',
                'icon_svg' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 48px; height: 48px; margin-bottom: 1.5rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" /></svg>',
            ],
            [
                'title' => 'Fasilitas',
                'slug' => 'fasilitas',
                'short_description' => 'Didukung sarana dan prasarana yang memadai untuk pembelajaran digital masa depan.',
                'content' => '<p>Fasilitas sekolah kami sangat memadai untuk mendukung proses belajar mengajar yang interaktif dan modern...</p>',
                'icon_svg' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 48px; height: 48px; margin-bottom: 1.5rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.83-5.83m0 0l-6.75-6.75a2.652 2.652 0 00-3.75 3.75l6.75 6.75m0 0l3-3m-3 3l-3 3m3-3l3-3" /></svg>',
            ],
        ];
        
        foreach($programs as $program) {
            \App\Models\Program::create($program);
        }
    }
}
