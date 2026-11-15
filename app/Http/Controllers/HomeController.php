<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['username'] = 'Caca';
        $data['last_login'] = date('Y-m-d H:i:s');

        return view('home', $data);
    }
}