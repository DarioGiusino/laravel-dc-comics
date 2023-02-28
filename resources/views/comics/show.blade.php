@extends('layouts.main')

@section('title', $comic->title)

@section('content')
  <main id="comic">
    {{-- blue stripe --}}
    <div class="blue-stripe"></div>

    {{-- top deatils --}}
    <section class="container position-relative">
      <div class="comic-cover">
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <p class="mb-0">{{ $comic->type }}</p>
      </div>

      <div class="row my-5">
        <div class="col-9">
          <h2>{{ $comic->title }}</h2>

          <div class="availability row my-3">
            <div class="col-9">
              <p>U.S. Price: <strong>$ {{ $comic->price }}</strong></p>
              <p>AVAILABLE</p>
            </div>
            <div class="col-3">
              <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Check Availability
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
            </div>
          </div>

          <p class="comic-desc">{{ $comic->description }}</p>
        </div>
        <div class="col-3 advertisement">
          {{-- ! immagine non si vede?? --}}
          <figure>
            <img src="{{ asset('images/adv.jpg') }}" alt="adv">
          </figure>
        </div>
      </div>
    </section>

    {{-- bottom details --}}
    <section class="detail">
      <div class="container">
        <div class="row row-cols-2 g-5 w-100">
          <div class="col">
            <h4 class="mb-4">Talent</h4>
            <ul>
              <li class="d-flex justify-content-between">
                <h6 class="mb-0">Art by:</h6>
                <p class="mb-0">{{ $comic->artists }}</p>
              </li>
              <li class="d-flex justify-content-between">
                <h6 class="mb-0">Written by:</h6>
                <p class="mb-0">{{ $comic->writers }}</p>
              </li>
            </ul>
          </div>
          <div class="col">
            <h4 class="mb-4">Specs</h4>
            <ul>
              <li class="d-flex justify-content-between">
                <h6 class="mb-0">Series:</h6>
                <p class="mb-0">{{ $comic->series }}</p>
              </li>
              <li class="d-flex justify-content-between">
                <h6 class="mb-0">U.S. Price:</h6>
                <p class="mb-0">$ {{ $comic->price }}</p>
              </li>
              <li class="d-flex justify-content-between">
                <h6 class="mb-0">On Sale Date:</h6>
                <p class="mb-0">{{ $comic->sale_date }}</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
