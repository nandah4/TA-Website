@extends('layouts.main')

@section('container')
    <br>
    <div class="overlay">
      <div class="parallax">
          <div class="home container-anm">
            <br><br><br>
              <div style="margin-top: 100px" class="row justify-content-center"> 
                <div class="col-5">
                  <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-search " type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </form>
                </div>
              </div>
      
          </div>
      </div>
  </div>
 <div class="container">


    <br><br>
    @if ($artikels->count())
    <h2 class="judul-artikel">{{ $title }}</h2>
    <div class="card mb-4">
      <img src="https://source.unsplash.com/500x300?semarang" style="height: 30vh" class="card-img-top" alt="...">
      <div class="card-body">
        <h4 style="font-weight: 700" class="card-title">{{ $artikels[0]->judul }}</h4>
        <p style="font-size: 14px; font-weight:500" class="card-text">{{ $artikels[0]->excerpt }}</p>
        <p class="card-text"><small class="text-muted">Artikel ini diunggah pada {{ $artikels[0]->created_at->diffForHumans() }}</small></p>
        <a href="/posts/{{ $artikels[0]->id }}" style="text-decoration: none; font-size:15px; font-weight:700" class="btn-primary">Baca Selengkapnya</a>
      </div>
    </div>
    @else
    <p class="text-center fs-3">Artikel tidak ditemukan.</p>
    @endif
  </div>

  <div class="container">
    <div class="row">
      @foreach ($artikels->skip(1) as $artikel)
      <div class="col-4 mb-4">
        <div class="card">
          <img style="padding: 15px; border-radius:20px" src="https://source.unsplash.com/500x300?surabaya" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 style="font-weight: 700" class="card-title">{{ $artikel->judul }}</h4>
            <small style="font-weight: 500; color:#444">Kategori Artikel : <a class="text-ctgg" style="text-decoration: none; font-weight:500; color: #444;" href="/categories/{{ $artikel->category->slug }}">{{ $artikel->category->name_kategori }}</a></small><hr>
            <p style="font-size: 15px; font-weight:400" class="card-text">{{ $artikel->excerpt }}</p>
            <a href="/posts/{{ $artikel->id }}" class="btn btn-artikel">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    </div>

  </div>
    

 

@endsection