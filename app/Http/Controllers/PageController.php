<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Latihan 6: Method about
    public function about()
    {
        return 'About Us Page'; //
    }

    // Tugas 4: Method contact
    public function contact()
    {
        return 'Ini adalah halaman kontak'; //
    }
}