<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
class PostSeeder extends Seeder
{
        public function run(): void
    {
        Post::truncate();
        Post::create([
            "title" => "Review Laravel Herd: Setup Lokal Jadi Mudah",
            "slug" => "review-laravel-herd",
            "author" => "Luki",
            "body" => "Laravel Herd adalah tool luar biasa untuk setup environment di macOS & Windows. Hanya dengan satu klik, PHP, Nginx, dan Node.js langsung ter-install dan siap pakai.",
            "image" => "post-herd.png"
        ]);
        Post::create([
            "title" => "VS Code vs Sublime Text: Pilihan Kami",
            "slug" => "vscode-vs-sublime",
            "author" => "Ghina",
            "body" => "Untuk proyek ini, kami memilih VS Code karena ekosistem ekstensinya yang kaya, terminal terintegrasi, dan dukungan IntelliSense yang sangat membantu.",
            "image" => "post-vscode.png"
        ]);
        Post::create([
            "title" => "Bootstrap 5: Masih Relevan di 2025?",
            "slug" => "review-bootstrap-5",
            "author" => "Luki",
            "body" => "Meskipun banyak framework CSS baru, Bootstrap 5 tetap menjadi pilihan solid untuk prototyping cepat. Grid system dan utility class-nya sangat menghemat waktu.",
            "image" => "post-bootstrap.png"
        ]);
    }
}