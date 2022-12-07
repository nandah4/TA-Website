<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ArtikellController extends Controller
{
    public function index()
    {
        return view('dashboard.posts.index', [
            'artikels' => Artikel::all()
        ]);
    }

    public function show (Artikel $artikel)
    {
        return view('dashboard.posts.show',[
            'artikel' => $artikel
        ]);
    }

    // public function create()
    // {
    //     return view('dashboard.posts.create',[
    //         'categories' => Category::all(),
    //     ]);
    // }

    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'judul' => 'required|max:255',
            'slug' => 'required|unique:artikels',
            'category_id' => 'required',
            'isi' => 'required',
        ]);

        $validasiData['excerpt'] = Str::limit(strip_tags($request->isi, 100));

        Artikel::create($validasiData);

        return redirect('/dashboard/posts')->with('sukses', 'Artikel berhasil ditambahkan');
    }
    public function edit(Artikel $artikel)
    {
        return view('dashboard.posts.edit', [
            'artikel' => $artikel,
            'categories' => Category::all()
        ]);
    }
    public function update(Request $request, Artikel $artikel)
    {   
        $validasiData = $request->validate([
            'judul' => 'required|max:255',
            'slug' => 'required|unique:artikels',
            'category_id' => 'required',
            'isi' => 'required',
        ]);

        $validasiData['excerpt'] = Str::limit(strip_tags($request->isi, 100));

        // Artikel::where('id', $artikel->id)
        //         ->update($validasiData);

        return redirect('/dashboard/posts')->with('sukses', 'Artikel berhasil diupdate');

    }


    public function destroy(Artikel $artikel)
    {
        
        Artikel::destroy($artikel->id);
        return redirect('/dashboard/posts')->with('sukses', 'Artikel terhapus.');
    }
}
