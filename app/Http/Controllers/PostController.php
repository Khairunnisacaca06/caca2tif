<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Menampilkan form pembutan post[cite: 41]
    public function create()
    {
        return view('posts.create'); //[cite: 41]
    }

    // Menyimpan data post ke database[cite: 41]
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required',
        ]); //[cite: 41]

        Post::create($validated); //[cite: 41]

        return redirect()->route('posts.create')->with('success', 'Post created successfully!'); //[cite: 41]
    }
}