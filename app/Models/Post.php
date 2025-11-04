<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // 1. TAMBAHKAN INI (INI YANG HILANG)
    //    Pastikan ini ada DI DALAM class Post, tapi DI LUAR method
    private static $blog_posts = [
        [
            "title" => "Judul Postingan Pertama",
            "slug" => "judul-postingan-pertama",
            "author" => "Mahasiswa A",
            "body" => "Isi postingan pertama..."
        ],
        [
            "title" => "Judul Postingan Kedua",
            "slug" => "judul-postingan-kedua",
            "author" => "Mahasiswa B",
            "body" => "Isi postingan kedua..."
        ]
    ];


    // 2. METHOD ANDA YANG SEKARANG (SUDAH BENAR)
    //    Garis merahnya akan hilang setelah langkah 1 ditambahkan
    public static function get_Data()
    {
        return self::$blog_posts;
    }

}