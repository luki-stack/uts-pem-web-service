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
        
        $profile_luki =[
            "nama" => "Luki Leokuna",
            "nim" => "2301010032",
            "role" => "Project Lead",
            "gambar" => "profilluki.jpg" 
        ];
        $profile_ghina =[
            "nama" => "Ghina Rahma Hidayah",
            "nim" => "2301010034",
            "role" => "UI/UX Designer",
            "gambar" => "ghina-profil.png" 
        ];
        
        return view('about', [
        "title" => "About",
        "profile_luki" => $profile_luki,
        "profile_ghina" => $profile_ghina
    ]);

    }
}