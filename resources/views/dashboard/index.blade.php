@extends('dashboard.layouts.layout')

@section('container')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Selamat Datang,{{ auth()->user()->username }} di Halaman Dashboard</h1>
  </div>

@endsection