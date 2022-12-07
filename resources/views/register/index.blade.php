@extends('layouts.main')

@section('container')

    <br><br><br><br>

<div class="container container-anm">
    <div class="row justify-content-center">
        <div class="col-md-5">
                <main class="text-center form-register w-100 ">
                  <form action="/register" method="post">
                    @csrf
                    <img class="mb-3" src="../images/p.png" alt="" width="200" height="160">
                    <h1 class=" h3">Registrasi Sekarang !</h1>
                
                    <div class="form-floating">
                      <input type="text" class="form-control @error('username') is-invalid @enderror" id="floatingInput" name="username" placeholder="Username Anda" required>
                      <label for="floatingInput">Username</label>
                      @error('username')
                      <div style="text-align: left" class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror

                    </div>
                    <div class="form-floating">
                      <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" name="email" placeholder="Alamat email" required>
                      <label for="floatingInput">Email</label>
                      @error('email')
                      <div style="text-align: left" class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    
                    <div class="form-floating">
                      <input type="password" class="form-control  @error('password') is-invalid @enderror" id="floatingPassword" name="password" placeholder="Masukkan Password" required>
                      <label for="floatingPassword">Password</label>
                      @error('password')
                      <div style="text-align: left" class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <button class="submit-button w-100 btn btn-lg" type="submit">DAFTAR</button>
                    <p style="font-size: 13px" class="mt-5 mb-3 text-muted">Anda sudah memiliki akun? <a class="text-decoration-none" href="/login">Masuk Sekarang</a> </p>
                  </form>
                </main>
        </div>
    </div>
</div>

@endsection