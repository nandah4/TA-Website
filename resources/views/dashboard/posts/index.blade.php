@extends('dashboard.layouts.layout')

@section('container')
<br>
<div class="table-responsive col-lg-8">
  @if(session()->has('sukses'))
  <div class="alert alert-primary" role="alert">
    {{ session('sukses') }}
  </div>
  @endif

  <h2>Manage Artikel</h2>
  <br>
    <a href="/create" style="text-decoration: none; background-color:#F5A738; padding: 10px; border-radius:10px">Tambah</a>
    <br><br><hr>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Judul</th>
          <th scope="col">Kategori</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($artikels as $artikel)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $artikel->judul }}</td>
            <td>{{ $artikel->category->name_kategori }}</td>
            <td>
                <a href="/dashboard/posts/{{ $artikel->slug }}" class="badge bg-info">Read</a>
                <a href="/dashboard/posts/{{ $artikel->slug }}/edit " class="badge bg-warning">Edit</a>
                <form action="/dashboard/posts/{{ $artikel->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin ingin menhapus artikel ini?')">Hapus</button>
                </form>
            </td>
          </tr>  
        @endforeach 
      </tbody>
    </table>
  </div>

@endsection

