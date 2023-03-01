{{-- #navbar --}}
<nav class="container navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="{{ asset('images/dc-logo.png') }}" alt="DC Logo" class="w-75">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="display: grid !important;">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item mx-2">
          <a class="nav-link @if (Route::is('home')) current @endif" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link @if (Route::is('characters')) current @endif" href="#">Characters</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link @if (request()->routeis('comics*')) current @endif"
            href="{{ route('comics.index') }}">Comics</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link @if (Route::is('movies')) current @endif" href="#">Movies</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link @if (Route::is('tv')) current @endif" href="#">TV</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link @if (Route::is('games')) current @endif" href="#">Games</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link @if (Route::is('collectibles')) current @endif" href="#">Collectibles</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link @if (Route::is('videos')) current @endif" href="#">Videos</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link @if (Route::is('fans')) current @endif" href="#">Fans</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link @if (Route::is('news')) current @endif" href="#">News</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Shop
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <form class="d-flex" role="search" method="get" action="{{ route('comics.index') }}">
      <input type="search" placeholder="Search" name="search" value="{{ $search ?? '' }}">
      <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
  </div>
</nav>

{{-- #jumbotron --}}
<section id="jumbo"></section>
