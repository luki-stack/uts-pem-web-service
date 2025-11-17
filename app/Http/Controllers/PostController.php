<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 
class PostController extends Controller
{
    public function index()
    { 
        // 1. Ambil semua data dari Model (CARA BARU)
        $allPosts = Post::all(); // Ini adalah fungsi Eloquent, bukan getData() lagi
        
        // 2. Implementasikan function count() (CARA BARU)
        $jumlahData = $allPosts->count(); // 'count()' dari Collection

        // 3. Kirim data dan jumlahnya ke View
        return view('posts', [
            "title" => "Blog Posts",
            "posts" => $allPosts,
            "total_posts" => $jumlahData
        ]);
    }
}