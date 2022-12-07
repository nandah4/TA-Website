@extends('layouts.main')

@section('container')

@if(session()->has('sukses'))
<div style="margin-bottom: -40px;" class="alert text alert-dismissible fade show" role="alert">
  {{ session('sukses') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session()->has('error'))
<div style="margin-bottom: -40px;" class="alert alert-danger text alert-dismissible fade show" role="alert">
  {{ session('error') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

    <br><br><br><br>

<div class="container container-anm">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <body class="text-center">
    
                <main class="form-signin w-100 m-auto">
                  <form action="/login" method="post">
                    @csrf
                    <img class="mb-4" src="../images/login-.png" alt="" width="200" height="160">
                    <h1 class="h3 mb-3">Login</h1>
                
                    <div style="" class="form-floating">
                      <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username Anda" autofocus required>
                      <label for="username">Username</label>
                      @error('username')
                      <div style="text-align: left" class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="form-floating">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
                      <label for="password">Password</label>
                    </div>
                
                    <button class="submit-button w-100 btn btn-lg" type="submit">MASUK</button>
                    <p style="font-size: 13px" class="mt-5 mb-3 text-muted">Anda belum memiliki akun? <a class="text-decoration-none" href="/register">Daftar Sekarang</a> </p>
                  </form>
                </main>
        </div>
    </div>
</div>
<br>

@endsection