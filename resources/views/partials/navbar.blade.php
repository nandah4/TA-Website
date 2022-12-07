<nav class="navbar  fixed-top py-0 navbar-expand-lg p-md-2">
    <div class="container">
      <h3 class="logo" style="color: rgb(255, 255, 255) ;font-size: 23px; font-weight:800; margin-top:7px">REKISHi</h3>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <div class="mx-auto">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a style="color: #fff" class="nav-link {{ ($title === "Beranda") ? 'aktif' : '' }}" href="/">Beranda</a>
            </li>
            <li class="nav-item dropdown">
              <a style="color: #fff" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Artikel
              </a>
              <ul class="dropdown-menu">
                <li><a style="color: #fff" class="dropdown-item nav-link {{ ($title === "Semua Artikel") ? 'aktif ' : '' }}" href="/blog">Artikel</a></li>
                <li><a style="color: #fff" class="dropdown-item nav-link {{ ($title === "Halaman Kategori") ? 'aktif ' : '' }}" href="/categories">Kategori</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a style="color: #fff" class="nav-link {{ ($title === "About") ? 'aktif ' : '' }}" href="/about">Tentang Kami</a>
            </li>
            
          </ul>
        </div>
  
        <li class="nav-item dropdown" style="list-style-type: none">
        @auth
          <a style="color: #ffb64f" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ auth()->user()->username }}
          </a>
          <ul class="dropdown-menu">
            {{-- <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li> --}}
            {{-- <li><a class="dropdown-item" href="/profile">Profil </a></li> --}}
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
              </form>
            </li>
          </ul>
        
        @else 
  
        <span class="navbar-text">
          <a style="color: rgb(0, 0, 0)" href="/login" class="user nav-link {{ ($title === "Login Form") ? 'aktif ' : '' }}"><i class="  fa-sharp fa-solid fa-right-to-bracket"></i>Masuk</a>
          <a class="menu-daftar nav-link {{ ($title === "Registrasi Form") ? 'aktif ' : '' }}" href="/register">Daftar</a>
        </span>
  
        @endauth
      </li>
      </div>
    </div>
  </nav>
  
  <script>
  </script>