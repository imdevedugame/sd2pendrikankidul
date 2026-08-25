<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
class FacilitySeeder extends Seeder {
    public function run(): void {
        $facilities = [
            ['name' => 'Perpustakaan Digital', 'description' => 'Perpustakaan dengan koleksi buku dan akses digital.', 'photo' => 'background.jpg'],
            ['name' => 'Lab Komputer', 'description' => 'Fasilitas komputer dengan akses internet untuk pembelajaran.', 'photo' => 'simulasi1.jpeg'],
            ['name' => 'UKS', 'description' => 'Unit Kesehatan Sekolah dengan perawat siaga.', 'photo' => 'rapat1.jpeg'],
            ['name' => 'Lapangan Olahraga', 'description' => 'Lapangan basket dan bulutangkis.', 'photo' => 'simulasi2.jpeg'],
            ['name' => 'Ruang Kesenian', 'description' => 'Ruangan khusus musik dan tari.', 'photo' => 'rapat2.jpeg'],
            ['name' => 'Kantin Sehat', 'description' => 'Menyediakan makanan bersih dan bergizi.', 'photo' => 'hero.jpeg'],
        ];
        foreach($facilities as $f) { \App\Models\Facility::create($f); }
    }
}
