@extends('dashboard.layouts.layout')

@section('container')

<br>
<h2>Manage User</h2><hr>
<div class="table-responsive col-lg-14">
  @if(session()->has('sukses'))
  <div class="alert alert-primary" role="alert">
    {{ session('sukses') }}
  </div>
  @endif
  
  <br>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Username</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
            <td>
                <form action="/dashboard/users" method="post" class="d-inline">
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
