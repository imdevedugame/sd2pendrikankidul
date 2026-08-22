<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@sdnpendrikanlor02.id',
            'password' => bcrypt('password'),
        ]);

        $this->call([
            TeacherSeeder::class,
            PostSeeder::class,
            GalleryItemSeeder::class,
            SchoolProfileSeeder::class,
            MenuLinkSeeder::class,
            HeroSliderSeeder::class,
        ]);
    }
}
