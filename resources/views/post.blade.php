@extends('layouts.main')

@section('container')
    <div class="container container-anm">
        
        <br><br><br><br><br>
        <div class="row justify-content-center">
            <div class="col-md-9">

                <h2 style="text-align: center" class="judul-artikel">{{ $artikel->judul }}</h2>

              <p style="text-align: center; color: #333">Kategori : <a style="text-decoration: none; color: #333" href="/categories/{{ $artikel->category->slug }}">{{ $artikel->category->name_kategori }}</a></p>
              <hr>
        
                <div class="image-artikel">
                    <img style="height: 60vh; border-radius: 8px" src="https://source.unsplash.com/500x300?surabaya" class="mb-5 card-img-top" alt="...">
                </div>

                {!! $artikel->isi !!}

            </div>
        </div>
        
    
    

    </div>
@endsection