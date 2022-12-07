@extends('dashboard.layouts.layout')

@section('container')
<br>
<div class="table-responsive col-lg-8">
  @if(session()->has('sukses'))
  <div class="alert alert-primary" role="alert">
    {{ session('sukses') }}
  </div>
  @endif

  <h2>Manage kategori</h2>
  <br>
    <a href="/dashboard/category/create" style="text-decoration: none; background-color:#F5A738; padding: 10px; border-radius:10px">Tambah</a>
    <br><br><hr>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Kategori</th>
          <th scope="col">Slug</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name_kategori }}</td>
            <td>{{ $category->slug }}</td>
            <td>
                <a href="/dashboard/category/{{ $category->slug }}" class="badge bg-info">Read</a>
                <a href="/dashboard/category/{{ $category->slug }}/edit " class="badge bg-warning">Edit</a>
                <form action="/dashboard/category/{{ $category->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin ingin menghapus kategori ini?')">Hapus</button>
                </form>
            </td>
          </tr>  
        @endforeach 
      </tbody>
    </table>
  </div>

@endsection

