<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Logika untuk mengambil data post akan ditambahkan di sini
        return view('posts', [
            "title" => "Blog Posts"
        ]);
    }
}