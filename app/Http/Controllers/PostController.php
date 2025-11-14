<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 
class PostController extends Controller
{
    public function index()
    {// 2. Ambil semua data dari Model
        $allPosts = Post::getData(); 

        // 4.B: Implementasikan function count() 
        $jumlahData = count($allPosts);

        // 3. Kirim data dan jumlahnya ke View
        return view('posts', [
            "title" => "Blog Posts",
            "posts" => $allPosts,
            "total_posts" => $jumlahData
        ]);
    }
}