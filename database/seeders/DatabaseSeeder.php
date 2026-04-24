<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Event;
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
        // 1. Akun Admin Utama
        User::create([
            'name' => 'Admin Amikom',
            'email' => 'admin@amikom.ac.id',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // 2. Insert 3 Kategori (Memenuhi syarat minimal 3)
        $cat1 = Category::create(['name' => 'Seminar IT', 'slug' => 'seminar-it']);
        $cat2 = Category::create(['name' => 'Entertainment', 'slug' => 'entertainment']);
        $cat3 = Category::create(['name' => 'Business & Startup', 'slug' => 'business-startup']);

        // 3. Insert 6 Sampel Events (Memenuhi syarat minimal 6)
        
        // Data dari kode Anda
        Event::create([
            'category_id' => $cat2->id,
            'title' => 'Jazz Night 2025',
            'description' => 'Nikmati malam yang indah dengan alunan musik jazz yang merdu.',
            'date' => '2026-05-10 19:00:00',
            'location' => 'Amikom Baru',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-1.png',
        ]);

        Event::create([
            'category_id' => $cat1->id,
            'title' => 'Hackathon - Unleash Your Inner Developer',
            'description' => 'Ayo asah skill coding kamu dan ciptakan solusi inovatif untuk tantangan masa depan!',
            'date' => '2026-05-05 10:00:00',
            'location' => 'Inkubator Amikom',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-2.png',
        ]);

        Event::create([
            'category_id' => $cat1->id,
            'title' => 'AI & FUTURE TECH SUMMIT 2026',
            'description' => 'Jelajahi tren terkini dalam kecerdasan buatan dan teknologi masa depan.',
            'date' => '2026-05-01 13:00:00',
            'location' => 'Cinema Unit 6',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-3.png',
        ]);

        // Tambahan event untuk memenuhi syarat 6
        Event::create([
            'category_id' => $cat3->id,
            'title' => 'Startup Pitching Day',
            'description' => 'Ajang presentasi ide startup di depan para investor.',
            'date' => '2026-06-01 09:00:00',
            'location' => 'Gedung 1',
            'price' => 0,
            'stock' => 50,
            'poster_path' => 'posters/event-4.png',
        ]);

        Event::create([
            'category_id' => $cat3->id,
            'title' => 'Digital Marketing Masterclass',
            'description' => 'Belajar strategi marketing di era digital.',
            'date' => '2026-06-15 10:00:00',
            'location' => 'Lab Komputer',
            'price' => 75000,
            'stock' => 40,
            'poster_path' => 'posters/event-5.png',
        ]);

        Event::create([
            'category_id' => $cat2->id,
            'title' => 'Stand Up Comedy Night',
            'description' => 'Malam penuh tawa bersama komika lokal.',
            'date' => '2026-07-20 20:00:00',
            'location' => 'Hall Utama',
            'price' => 30000,
            'stock' => 150,
            'poster_path' => 'posters/event-6.png',
        ]);
    }
}