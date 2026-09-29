<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'judul' => 'Pemograman Web Framework',
            'penulis' => 'Aamiin',
            'tahun_terbit' => 2025,
            'stok' => 5,
        ]);
    
        Book::create([
            'judul' => 'Belajar Laravel',
            'penulis' => 'Azmi',
            'tahun_terbit' => 2026,
            'stok' => 2,
        ]);

        Book::create([
            'judul' => 'Pembelajaran Database',
            'penulis' => 'Laili',
            'tahun_terbit' => 2023,
            'stok' => 8,
        ]);

        Book::create([
            'judul' => 'Pemograman PHP',
            'penulis' => 'Sivi',
            'tahun_terbit' => 2022,
            'stok' => 7,
        ]);

        Book::create([
            'judul' => 'Memahami Dasar Laravel',
            'penulis' => 'Ninda',
            'tahun_terbit' => 2020,
            'stok' => 10,
        ]);
    }
}
