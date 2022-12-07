
@extends('layouts.main')

@section('container')


    <br><br><br><br><br>
    <div class="container container-anm">

      <h2 class="text-center mb-5 judul-artikel">Semua Kategori</h2>
      <div class="row">
        @foreach ($categories as $category)

        <div class="card text-center" style="background-color: #333; max-width:350px; margin:auto">
          <div class="card-body">
            <h5 style="color: rgb(255, 255, 255); font-weight:600; font-size: 20px" class="card-title">{{ $category->name_kategori }} </h5>
            <a href="/categories/{{ $category->slug  }}" class="btn bg-white btn-artikel">Lihat Selengkapnya</a>
          </div>
        </div>
        @endforeach

      </div>
    </div>
    

  
   



@endsection