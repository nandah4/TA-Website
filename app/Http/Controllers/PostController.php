<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => "Semua Artikel",
            'artikels' => Artikel::latest()->get()
        ]);
    }

    public function show (Artikel $artikel)
    {
        return view('post',[
            'title' => 'Post',
            'artikel' => $artikel
        ]);
    }
    
}
