<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">REKISHI</a>
    <a style="text-decoration: none; background-color:#F5A738; padding: 4px; margin-right:20px;border-radius: 10px" href="/">Kembali</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap d-inline">
        
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="bg-dark nav-link px-3">Logout</button>
        </form>
      </div>
    </div>
  </header>