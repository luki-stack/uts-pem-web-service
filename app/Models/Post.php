<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    private static $blog_posts = [
        [
            "title" => "Review Laravel Herd: Setup Lokal Jadi Mudah",
            "slug" => "review-laravel-herd",
            "author" => "Luki",
            "body" => "Laravel Herd adalah tool luar biasa untuk setup environment di macOS & Windows. Hanya dengan satu klik, PHP, Nginx, dan Node.js langsung ter-install dan siap pakai.",
            "image" => "post-herd.png" 
        ],
        [
            "title" => "VS Code vs Sublime Text: Pilihan Kami",
            "slug" => "vscode-vs-sublime",
            "author" => "Ghina",
            "body" => "Untuk proyek ini, kami memilih VS Code karena ekosistem ekstensinya yang kaya, terminal terintegrasi, dan dukungan IntelliSense yang sangat membantu.",
            "image" => "post-vscode.png" // 
        ],
        [
            "title" => "Bootstrap 5: Masih Relevan di 2025?",
            "slug" => "review-bootstrap-5",
            "author" => "Luki",
            "body" => "Meskipun banyak framework CSS baru, Bootstrap 5 tetap menjadi pilihan solid untuk prototyping cepat. Grid system dan utility class-nya sangat menghemat waktu.",
            "image" => "post-bootstrap.png" // 
        ]
    ];
    

    public static function getData()
    {
        return self::$blog_posts;
    }
}