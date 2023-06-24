<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Sewa Buku</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Data Peminjam</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Transaksi Data Peminjam</a>
          </li>
          
        </ul>
        <div class="me-3">
          <a class="btn btn-danger btn-sm" href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
          <form action="{{ route('logout') }}" method="POST" class="d-one">
            @csrf
          </form>
        </div>
        <div>
          @if (Auth::check())
              <b class="me-2">{{ "Hai, ". Auth::user()->name }}</b>
          @else    
          @endif
        </div>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>