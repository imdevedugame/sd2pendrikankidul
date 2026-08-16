<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        $teachers = [
            ['name' => 'Siti Markamah, S.Pd, M.Pd.', 'position' => 'Kepala Sekolah'],
            ['name' => 'Ratna Arminingsih, S.Pd', 'position' => 'Guru Kelas I A'],
            ['name' => 'Setyowati, S.Pd', 'position' => 'Guru Kelas I A'],
            ['name' => 'Fatma Dwi Astuti, S.Pd', 'position' => 'Guru Kelas II A'],
            ['name' => 'Ferindra Sari, S.Pd', 'position' => 'Guru Kelas II B'],
            ['name' => 'AG. dwi Oktavianto, S.Pd', 'position' => 'Guru Kelas III A'],
            ['name' => 'Eka Sulastri, S.Pd', 'position' => 'Guru Kelas III B'],
            ['name' => 'Silvirius Widodo, S.Pd', 'position' => 'Guru Kelas IV A'],
            ['name' => 'Novi, S.Pd', 'position' => 'Guru Kelas IV B'],
            ['name' => 'Sitta Husnina Nurin Shabrina, S.Pd', 'position' => 'Guru Kelas V A'],
            ['name' => 'Yusefin Nuri, S.Pd', 'position' => 'Guru Kelas V B'],
            ['name' => 'Yohanes, S.Pd', 'position' => 'Guru Kelas VI A'],
            ['name' => 'Pifi Setiyowati, S.Pd', 'position' => 'Guru Kelas VI B'],
            ['name' => 'Nurul Fathonah, S.Pd', 'position' => 'Guru PAI'],
            ['name' => 'Siti Isnaini, S.Pd', 'position' => 'Guru PAI'],
            ['name' => 'Sri Widadi, S.Pd', 'position' => 'Guru PJOK'],
            ['name' => 'Agung Triantono, S.Pd', 'position' => 'Guru PJOK'],
        ];

        foreach ($teachers as $t) {
            \App\Models\Teacher::create([
                'name' => $t['name'],
                'position' => $t['position'],
                'description' => '',
                'photo' => 'kepsek.jpeg' // placeholder
            ]);
        }
    }
}
