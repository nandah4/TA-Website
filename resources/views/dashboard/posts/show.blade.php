@extends('dashboard.layouts.layout')

@section('container')

<div class="container">
        
    <div class="row justify-content-center">
        <div class="col-md-9">

            <h2 style=" color:black" class="">{{ $artikel->judul }}</h2>

            <a href="/dashboard/posts" style="background-color:#F5A738" class="btn">Kembali</a>
          <hr>
          <div class="image-artikel">
            <img style="height: 60vh; border-radius: 8px" src="https://source.unsplash.com/500x300?surabaya" class="mb-5 card-img-top" alt="...">
        </div>
           
            <p>       {!! $artikel->isi !!}</p>

        </div>
    </div>
</div>

@endsection