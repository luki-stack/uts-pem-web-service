<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home', [
            "title" => "Home"
        ]);
    }

    public function about()
    {
        // Data penulis bisa di-hardcode di sini atau diambil dari Model
        return view('about', [
            "title" => "About",
            "nama" => "Luki Leokuna",
            "nim" => "2301010032",
            "gambar" => "gambar-profil.jpg" // (simpan gambar di public/img)
        ]);
    }
}